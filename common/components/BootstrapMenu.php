<?php
namespace common\components;
use Yii;
use common\components\QuickMenu;
class BootstrapMenu extends QuickMenu
{
    public function __construct($options = array())
    {
        parent::__construct($options);

        $this->setDropdownIcon('<i class="caret"></i>');
        if(!empty($options['param']['menuTagClass'])){
            $this->set('ul-root', array('class'=> $options['param']['menuTagClass'], 'id'=>'#myMenu'));
        }
        else{
            $this->set('ul-root', array('class'=> 'menu-nav', 'id'=>'#myMenu'));
        }

        $this->set('ul', array('class'=>'dropdown-menu'));
        $this->set('li-parent', array('class'=>'dropdown'));
        $this->set('a-parent', array('class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'role'=>"button", 'aria-haspopup'=>"true", 'aria-expanded'=>"false"));
    }
}
