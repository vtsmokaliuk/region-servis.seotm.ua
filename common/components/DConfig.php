<?php
namespace common\components;
use Yii;
use yii\base\BaseObject;
use backend\models\System;
class DConfig extends BaseObject
{
    public $cache = 0;
    public $dependency = null;
    protected $data = array();

    protected $table = 'system';
    public function init()
    {
        $db = $this->getDbConnection();
        $items = $db->createCommand('SELECT * FROM '.$this->table)->queryAll();
        foreach ($items as $item)
        {
            if ($item['param'])
                $this->data[$item['param']] = $item['value'] === '' ?  $item['default'] : $item['value'];
        }
        parent::init();
    }
    public function get($key)
    {
        if (array_key_exists($key, $this->data))
            return $this->data[$key];
       
    }
    public function set($key, $value)
    {
        $model = System::find()->where(array('param'=>$key));
        if (!$model)
            throw new CException('Undefined parameter ' . $key);
        $model = new System();
        $model->value = $value;
        if ($model->save())
            $this->data[$key] = $value;
    }
    public function add($params)
    {
        if (isset($params[0]) && is_array($params[0]))
        {
            foreach ($params as $item)
                $this->createParameter($item);
        }
        elseif ($params)
            $this->createParameter($params);
    }
    public function delete($key)
    {
        if (is_array($key))
        {
            foreach ($key as $item)
                $this->removeParameter($item);
        }
        elseif ($key)
            $this->removeParameter($key);
    }
    protected function getDbConnection()
    {
        if ($this->cache)
            $db = Yii::$app->db->cache($this->cache, $this->dependency);
        else
            $db = Yii::$app->db;
        return $db;
    }
    protected function createParameter($param)
    {
        if (!empty($param['param']))
        {
            $model = System::find()->where(['param' => $param['param']])->one();
            if ($model === null)
                $model = new System();
            $model->param = $param['param'];
            $model->label = isset($param['label']) ? $param['label'] : $param['param'];
            $model->value = isset($param['value']) ? $param['value'] : '';
            $model->default = isset($param['default']) ? $param['default'] : '';
            $model->type = isset($param['type']) ? $param['type'] : 'string';
            $model->save();
        }
    }
    protected function removeParameter($key)
    {
        if (!empty($key))
        {
            $model = System::find()->where(array('param'=>$key))->one();
            if ($model)
                $model->delete();
        }
    }
}