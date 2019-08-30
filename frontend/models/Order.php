<?php

namespace frontend\models;

use Yii;

class Order extends \yii\db\ActiveRecord
{

   public static function tableName()
    {
        return 'order';
    }

    public function rules()
    {
        return [
            [['customer_id', 'delivery_id', 'payment_id', 'pos'], 'integer'],
            [['adress', 'user_agent'], 'string'],
            [['firstname', 'lastname', 'surname', 'postcode', 'date_modifield'], 'string', 'max' => 64],
            [['email'], 'string', 'max' => 96],
            [['telephone'], 'string', 'max' => 32],
            [['city', 'payment_name'], 'string', 'max' => 255],
            [['firstname', 'lastname', 'surname', 'postcode', 'city', 'adress', 'telephone' , 'delivery_id'], 'required',  'message'=> Yii::t('frontend','Пожалуйста, заполните поле: {attribute}')]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'firstname' => Yii::t('frontend','Имя *'),
            'lastname' => Yii::t('frontend','Фамилия *'),
            'surname' => Yii::t('frontend','Отчество *'),
            'email' => 'Email',
            'telephone' => Yii::t('frontend','Телефон *'),
            'adress' => Yii::t('frontend','Адрес (Улица, номер дома и квартиры) *'),
            'city' => Yii::t('frontend','Город *'),
            'postcode' => Yii::t('frontend','Индекс *'),
            'delivery_id' => Yii::t('frontend','Доставка *'),
            'delivery_name' => 'Delivery Name',
            'total' => 'Total',
            'currency_code' => 'Currency Code',
            'payment_id' => 'Payment ID',
            'payment_name' => 'Payment Name',
            'order_status_id' => 'Order Status ID',
            'pos' => 'Pos',
            'ip' => 'Ip',
            'user_agent' => 'User Agent',
            'date_added' => 'Date Added',
            'date_modifield' => 'Date Modifield',
        ];
    }
}
