<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Material;
use backend\models\MaterialDescription;
class MaterialSearch extends Material
{

    public function rules()
    {
        return [
            [['id', 'pos', 'status'], 'integer'],
            [['alias', 'image'], 'string'],
            ['header', 'string'],
        ];
    }


    public function scenarios()
    {
        return Model::scenarios();
    }


    public function search($params)
    {
        $query = Material::find();
        $query->joinWith('translations');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['header'] = [
            'asc' => [MaterialDescription::tableName() . '.header' => SORT_ASC],
            'desc' => [MaterialDescription::tableName() . '.header' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'pos' => $this->pos,
            'status' => $this->status,
            'section_id' => $this->section_id,
            'onmain' => $this->onmain,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'image', $this->image]);
        $query->andFilterWhere(['like',MaterialDescription::tableName() . '.header', $this->header]);
        return $dataProvider;
    }
}
