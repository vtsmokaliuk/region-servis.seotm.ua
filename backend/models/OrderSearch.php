<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Order;
class OrderSearch extends Order
{
    public function rules()
    {
        return [
           [['firstname', 'lastname' , 'surname', 'email', 'telephone'], 'string'],
            [['order_status_id'], 'integer'],
            [['total'], 'number']

        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Order::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'surname' => $this->surname,
            'email' => $this->email,
            'order_status_id' => $this->order_status_id,
            'telephone' => $this->telephone,
            'total' => $this->total
        ]);


        return $dataProvider;
    }
}
