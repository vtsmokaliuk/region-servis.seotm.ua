<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;
use backend\models\ProductDescription;
class ProductSearch extends Product
{
    public function rules()
    {
        return [
            [['id', 'pos', 'status', 'quantity'], 'integer'],
            ['header', 'safe'],
            ['price','number'],
            ['model' , 'string']
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Product::find();
        $query->joinWith('translations');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['header'] = [
            'asc' => [ProductDescription::tableName() . '.header' => SORT_ASC],
            'desc' => [ProductDescription::tableName() . '.header' => SORT_DESC],
        ];
        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'pos' => $this->pos,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'model' => $this->model,
             'status' => $this->status,
        ]);
        $query->andFilterWhere(['like', ProductDescription::tableName() . '.header', $this->header]);

        return $dataProvider;
    }
}
