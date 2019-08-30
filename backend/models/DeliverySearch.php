<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Delivery;
use backend\models\DeliveryDescription;
class DeliverySearch extends Delivery
{
    public function rules()
    {
        return [
            [['id', 'pos'], 'integer'],
            ['header', 'safe'],
            [['price', 'pos'], 'number'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Delivery::find();
        $query->joinWith('translations');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['header'] = [
            'asc' => [DeliveryDescription::tableName() . '.header' => SORT_ASC],
            'desc' => [DeliveryDescription::tableName() . '.header' => SORT_DESC],
        ];
        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'pos' => $this->pos,
        ]);
        $query->andFilterWhere(['like', DeliveryDescription::tableName() . '.header', $this->header]);

        return $dataProvider;
    }
}
