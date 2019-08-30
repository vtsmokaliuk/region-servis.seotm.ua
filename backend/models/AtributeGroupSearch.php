<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AtributeGroup;
use backend\models\AttributeGroupDescription;
class AtributeGroupSearch extends AtributeGroup
{
    public function rules()
    {
        return [
            [['id', 'pos'], 'integer'],
            ['header', 'safe']
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = AtributeGroup::find();
        $query->joinWith('translations');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['header'] = [
            'asc' => [AttributeGroupDescription::tableName() . '.header' => SORT_ASC],
            'desc' => [AttributeGroupDescription::tableName() . '.header' => SORT_DESC],
        ];
        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'pos' => $this->pos,
        ]);
        $query->andFilterWhere(['like', AttributeGroupDescription::tableName() . '.header', $this->header]);

        return $dataProvider;
    }
}
