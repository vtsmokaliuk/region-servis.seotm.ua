<?php

namespace backend\models;

use Yii;

class Order extends \yii\db\ActiveRecord
{

    public $statusInNew = 1;
    const STATUS_OLD_ORDER = 0;
    const STATUS_NEW_ORDER = 1;
    const STATUS_WAIT_ORDER = 2;
    const STATUS_GO_ORDER = 3;

    public static $orderStatsTable = 'order_history';

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
            [['city', 'delivery_name', 'payment_name'], 'string', 'max' => 255],
            [['firstname', 'lastname', 'surname', 'postcode', 'city', 'adress', 'telephone', 'delivery_id'], 'required', 'message' => Yii::t('admin', 'Пожалуйста, заполните поле: {attribute}')]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'firstname' => Yii::t('admin', 'Имя *'),
            'lastname' => Yii::t('admin', 'Фамилия *'),
            'surname' => Yii::t('admin', 'Отчество *'),
            'email' => 'Email',
            'telephone' => Yii::t('admin', 'Телефон *'),
            'adress' => Yii::t('admin', 'Адрес (Улица, номер дома и квартиры) *'),
            'city' => Yii::t('admin', 'Город *'),
            'postcode' => Yii::t('admin', 'Индекс *'),
            'delivery_id' => Yii::t('admin', 'Доставка *'),
            'delivery_name' => 'Delivery Name',
            'total' => Yii::t('admin', 'Итого'),
            'currency_code' => 'Currency Code',
            'payment_id' => 'Payment ID',
            'payment_name' => 'Payment Name',
            'order_status_id' => Yii::t('admin', 'Статус'),
            'pos' => 'Pos',
            'ip' => 'Ip',
            'user_agent' => 'User Agent',
            'date_added' => 'Date Added',
            'date_modifield' => 'Date Modifield',
        ];
    }

    public static function getNewOrderCount()
    {
        return Order::find()->where(['order_status_id' => (new self)->statusInNew])->count();
    }

    public static function getStatsByDate($day)
    {
        switch ($day) {
            case 'today' :
                $sql = "CURDATE()";
                break;
            default:
                $sql = "CURDATE() - INTERVAL " . $day . ' DAY';
                break;

        }
        $result = Yii::$app->db->createCommand('SELECT SUM(total) FROM `' . self::$orderStatsTable . '` WHERE  FROM_UNIXTIME(date_added, "%Y-%m-%d") = ' . $sql)->queryOne();
        return round($result['SUM(total)']);
    }

    public static function getCurrency(){
        return Yii::$app->config->get('currency');
    }

    public static function getStatsByAllTime()
    {
        $result = Yii::$app->db->createCommand('SELECT SUM(total) FROM `' . self::$orderStatsTable . '`')->queryOne();
        return round($result['SUM(total)']).self::getCurrency();
    }
}
