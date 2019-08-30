<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Attribute;
use backend\models\AttributeDescription;
class AttributeSearch extends Attribute
{
    public function rules()
    {
        return [
            [['id', 'pos'], 'integer'],
            ['header', 'string']
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Attribute::find();
        $query->joinWith('translations');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['header'] = [
            'asc' => [AttributeDescription::tableName() . '.header' => SORT_ASC],
            'desc' => [AttributeDescription::tableName() . '.header' => SORT_DESC],
        ];
        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'pos' => $this->pos,
        ]);
        $query->andFilterWhere(['like', AttributeDescription::tableName() . '.header', $this->header]);

        return $dataProvider;
    }
}
