<?php

namespace frontend\models;

use Yii;

class OrderRent extends \yii\db\ActiveRecord
{
    public $orderStatusId = 1;
    public static function tableName()
    {
        return 'order_rent';
    }

    public function rules()
    {
        return [
            [['product_id', 'hour'], 'integer'],
            [['price'], 'number'],
            [['comment'], 'string'],
            [['firstname', 'lastname', 'surname'], 'string', 'max' => 64],
            [['email'], 'string', 'max' => 96],
            [['email'], 'email'],
            [['telephone'], 'string', 'max' => 32],
            [['product_name'], 'string', 'max' => 255],
            [['firstname', 'lastname', 'surname', 'telephone', 'hour'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'customer_id' => Yii::t('frontend', 'Customer ID'),
            'product_id' => Yii::t('frontend', 'Product ID'),
            'firstname' => Yii::t('frontend', 'Имя *'),
            'lastname' => Yii::t('frontend', 'Фамилия *'),
            'surname' => Yii::t('frontend', 'Отчество *'),
            'email' => 'Email',
            'telephone' => Yii::t('frontend', 'Телефон *'),
            'hour' => Yii::t('frontend', 'Количество часов'),
            'comment' => Yii::t('frontend', 'Комментарий'),
            'price' => Yii::t('frontend', 'Price'),
            'total' => Yii::t('frontend', 'Total'),
            'currency_code' => Yii::t('frontend', 'Currency Code'),
            'order_status_id' => Yii::t('frontend', 'Order Status ID'),
            'pos' => Yii::t('frontend', 'Pos'),
            'ip' => Yii::t('frontend', 'Ip'),
            'date_added' => Yii::t('frontend', 'Date Added'),
            'date_modifield' => Yii::t('frontend', 'Date Modifield'),
        ];
    }

    public function saveOrderRent($data)
    {
        $model = new OrderRent;
        if (!empty($data)) {
            if (!empty($data['firstname']) and !empty($data['lastname']) and
                !empty($data['surname']) and !empty($data['telephone']) ) {
                $time = time();
                $curency = Yii::$app->config->get('currency');
                $total = $data['price'] * $data['hour'];
                $model->product_id = $data['product_id'];
                $model->product_name = $data['product_name'];
                $model->price = $data['price'];
                $model->hour = $data['hour'];
                $model->firstname = $data['firstname'];
                $model->lastname = $data['lastname'];
                $model->surname = $data['surname'];
                $model->email = $data['email'];
                $model->telephone = $data['telephone'];
                $model->comment = $data['comment'];
                $model->order_status_id = $this->orderStatusId;
                $model->date_added = $time;
                $model->currency_code = $curency;
                $model->total = $total;
                $model->save(false);
                return true;
            }
        }
    }
}
