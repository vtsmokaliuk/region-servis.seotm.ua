<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Banner;
class BannerSearch extends Block
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
        $query = Banner::find();
             $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
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
       

        return $dataProvider;
    }
}
