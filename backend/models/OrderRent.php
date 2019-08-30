<?php

namespace backend\models;

use Yii;

class OrderRent extends \yii\db\ActiveRecord
{
    public $orderStatusId = 1;
    public $statusInNew = 1;
    const STATUS_OLD_ORDER = 0;
    const STATUS_NEW_ORDER = 1;
    const STATUS_WAIT_ORDER = 2;
    const STATUS_GO_ORDER = 3;
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
            'id' => Yii::t('admin', 'ID'),
            'customer_id' => Yii::t('admin', 'Customer ID'),
            'product_id' => Yii::t('admin', 'Product ID'),
            'firstname' => Yii::t('admin', 'Имя *'),
            'lastname' => Yii::t('admin', 'Фамилия *'),
            'surname' => Yii::t('admin', 'Отчество *'),
            'email' => 'Email',
            'telephone' => Yii::t('admin', 'Телефон *'),
            'hour' => Yii::t('admin', 'Количество часов'),
            'comment' => Yii::t('admin', 'Комментарий'),
            'price' => Yii::t('admin', 'Цена'),
            'total' => Yii::t('admin', 'Итого'),
            'currency_code' => Yii::t('admin', 'Currency Code'),
            'order_status_id' => Yii::t('admin','Статус'),
            'pos' => Yii::t('admin', 'Pos'),
            'ip' => Yii::t('admin', 'Ip'),
            'date_added' => Yii::t('admin', 'Дата'),
            'date_modifield' => Yii::t('admin', 'Date Modifield'),
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

    public static function getNewOrderCount(){
        return OrderRent::find()->where(['order_status_id' => (new self)->statusInNew])->count();
    }
}
