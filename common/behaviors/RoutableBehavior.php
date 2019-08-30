<?php
namespace common\behaviors;

use Yii;
use common\models\Route;
use yii\base\Behavior;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;

class RoutableBehavior extends Behavior
{
    public $urlAttribute = 'url';
    public $defaultRoute;
    private $_route;

    public function init()
    {
        if($this->defaultRoute === null) {
            throw new InvalidConfigException("Set [defaultRoute] property");
        }
        parent::init();
    }

    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'afterSave',
            ActiveRecord::EVENT_AFTER_UPDATE => 'afterSave',
            ActiveRecord::EVENT_AFTER_DELETE => 'afterDelete',
        ];
    }

    public function getRoute()
    {
        if(!$this->_route) {
            $this->_route = $this->owner->hasOne(Route::className(), ['model_id' => $this->owner->primaryKey()[0]])
                ->where([Route::tableName().'.model' => get_class($this->owner)])->one();

            if(!$this->_route) {
                $this->_route = new Route([
                    'model' => get_class($this->owner),
                    'model_id' => $this->owner->primaryKey,
                ]);
            }
        }

        return $this->_route;
    }

    public function afterSave()
    {
        $this->route->load(Yii::$app->request->post());
        $this->route->url = ltrim($this->owner->{$this->urlAttribute}, '/');
        $this->route->save(false);
    }

    public function afterDelete()
    {
        if(!$this->route->isNewRecord) {
            $this->route->delete();
        }
    }
}
