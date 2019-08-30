<?php
namespace common\components;
class QuickMenu
{

    private $dropdownIcon = '';
    private $activeClass = 'active';
    protected $activeItem = '';
    private $arrAttr = array();
    private $strAttr = array();
    private $arrData = array();
    private $result = array();

    public function __construct($options = array())
    {
        if (isset($options['data']))
        {
            $this->setData($options['data']);
        }
        // $this->dropdownIcon = isset($options['dropdownIcon']) ? $options['dropdownIcon'] : $this->dropdownIcon;
        $this->dropdownIcon = '';
        $this->activeClass = isset($options['active-class']) ? $options['active-class'] : $this->activeClass;
    }
    
    public function set($name, $value)
    {
        $tags = array('ul', 'ul-root', 'li', 'li-parent', 'a', 'a-parent', 'active-class');
        if (in_array($name, $tags))
        {
            $this->arrAttr[$name] = $value;
        }
    }
    public function setDropdownIcon($content)
    {
        $this->dropdownIcon = $content;
    }

    public function setActiveItem($href, $activeClass = '')
    {
        $this->activeItem = $href;
        if ($activeClass != '')
        {
            $this->activeClass = $activeClass;
        }
        $this->set('active-class', array('class' => $this->activeClass));
    }

   public function setData($data)
    {
        if (is_string($data))
        {
            $this->arrData = json_decode($data, TRUE);
        } elseif (is_array($data))
        {
            $this->arrData = $data;
        }
    }

    public function insert($item, $before_at = '', $parent = '')
    {
        if ($before_at === '' && $parent === '')
        {
            $this->arrData[] = $item;
            return;
        }
        if ($parent === '')
        {
            $pos = array_search($before_at, array_column($this->arrData, 'text'));
            if ($pos !== FALSE)
            {
                array_splice($this->arrData, $pos, 0, array($item));
                return;
            }
            $this->arrData[] = $item;
        } else
        {
            $pos_parent = array_search($parent, array_column($this->arrData, 'text'));
            if ($pos_parent === FALSE)
            {
                $this->a8rrData[] = $item;
                return;
            }
            $pos = array_search($before_at, array_column($this->arrData[$pos_parent]['children'], 'text'));
            if ($pos !== FALSE)
            {
                array_splice($this->arrData[$pos_parent]['children'], $pos, 0, array($item));
                return;
            }
            $this->arrData[$pos_parent]['children'][] = $item;
        }
    }
    
   public function replace(array $newItem, $text)
    {
        $pos = array_search($text, array_column($this->arrData, 'text'));
        if ($pos===FALSE)
        {
            return FALSE;
        }
        $this->arrData[$pos] = $newItem;
        return TRUE;
    }
    
    public function remove($text)
    {
        $pos = array_search($text, array_column($this->arrData, 'text'));
        if ($pos===FALSE)
        {
            return FALSE;
        }
        array_splice($this->arrData, $pos, 1);
        return TRUE;
    }
    public function getItem($text)
    {
        $pos = array_search($text, array_column($this->arrData, 'text'));
        return ($pos!==FALSE) ? $this->arrData[$pos] : NULL;
    }
    
   public function html()
    {
        if (!empty($this->result))
        {
            return $this->buildFromResult($this->result);
        }
        foreach ($this->arrAttr as $tag => $attr)
        {
            $this->strAttr[$tag] = $this->buildAttributes($tag);
        }
        return $this->build($this->arrData);
    }

   public function fromResult($result, $columnID, $columnParent)
    {
        $this->setResult($result, $columnID, $columnParent);
        return $this->buildFromResult($this->result);
    }

   public function setResult($result, $columnID, $columnParent)
    {
        $items = array();
        foreach ($result as $row)
        {
            $target = (isset($row->target)) ? $row->target : '_self';
            $icon = (isset($row->icon)) ? $row->icon : '';
            $items[$row->$columnParent][$row->$columnID] = array('id' => $row->id, 'href' => $row->href, 'text' => $row->text, 'icon' => $icon, 'target' => $target);
        }
        $this->result = $items;
    }

   protected function getAttr($tag)
    {
        return isset($this->strAttr[$tag]) ? $this->strAttr[$tag] : '';
    }

     protected function getTextItem($item, $isParent)
    {
        // $str = (isset($item['icon'])) ? "<i class=\"{$item['icon']}\"></i> " : '';
         $str = '';
        $str .= ($isParent) ? "{$item['text']} {$this->dropdownIcon}" : $item['text'];
        return $str;
    }

    private function buildAttributes($tag)
    {
        $str = '';
        if (isset($this->arrAttr[$tag]))
        {
            foreach ($this->arrAttr[$tag] as $name => $value)
            {
                $str .= " {$name}=\"{$value}\"";
            }
        }
        return $str;
    }

     protected function build($array, $depth = 0)
    {
        $str = ($depth === 0) ? '<ul' . $this->getAttr('ul-root') . '>' : '<ul' . $this->getAttr('ul') . '>';
        foreach ($array as $item)
        {
            $isParent = isset($item['children']);
            $li = ($isParent) ? 'li-parent' : 'li';
            $a = ($isParent) ? 'a-parent' : 'a';
            $active = ($this->activeItem == $item['href']) ? $this->getAttr('active-class') : '';
            $str .= '<li' . $this->getAttr($li) . " {$active} >";
            $str .= '<a href="' . $item['href'] . '" title="' . $item['title'] . '"' . $this->getAttr($a) . '>' . $this->getTextItem($item, $isParent) . '</a>';
            if ($isParent)
            {
                $str .= $this->build($item['children'], 1);
            }
            $str .= '</li>';
        }
        $str .= '</ul>';
        return $str;
    }

   protected function buildFromResult(array $array, $parent = 0, $level = 0)
    {
        $ul = ($parent === 0) ? 'ul-root' : 'ul';
        $str = '<ul' . $this->getAttr($ul) . '>';
        foreach ($array[$parent] as $item_id => $item)
        {
            $isParent = isset($array[$item_id]);
            $li = ($isParent) ? 'li-parent' : 'li';
            $a = ($isParent) ? 'a-parent' : 'a';
            $str .= '<li' . $this->getAttr($li) . '>';
            $str .= "<a href=\"{$item['href']}\" target=\"{$item['target']}\"" . $this->getAttr($a) . '>' . $this->getTextItem($item, $isParent) . '</a>';
            if ($isParent)
            {
                $str .= $this->buildFromResult($array, $item_id, $level + 2);
            }
            $str .= '</li>';
        }
        $str .= '</ul>';
        return $str;
    }

}
