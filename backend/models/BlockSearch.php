<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Block;
use backend\modelsBlockDescription;
class BlockSearch extends Block
{
    public function rules()
    {
        return [
            [['id', 'pos', 'status'], 'integer'],
            ['header', 'string'],
            [['key', 'type'] , 'string']
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Block::find();
        $query->joinWith('translations');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['header'] = [
            'asc' => [BlockDescription::tableName() . '.header' => SORT_ASC],
            'desc' => [BlockDescription::tableName() . '.header' => SORT_DESC],
        ];
        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'pos' => $this->pos,
            'type' => $this->type,
            'key' => $this->key,
           'status' => $this->status,
        ]);
        $query->andFilterWhere(['like', BlockDescription::tableName() . '.header', $this->header]);

        return $dataProvider;
    }
}
