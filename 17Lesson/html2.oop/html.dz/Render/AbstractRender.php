<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 7:51
 */

namespace Html\Dz\Render;


abstract class AbstractRender implements IRender
{
    protected function makeAttributeString(array $attributes) {
        array_walk($attributes, function(&$value, $key){
            $value = $key . '="' . $value . '"';
        });
        
        return implode(' ', $attributes);
    }

    public function renderObject(ITag $obj):string
    {
        $attrStr = $this->makeAttributeString($obj->getAttributes());
        
        $attrStr .= (strlen($attrStr) > 0)? ' ' : '';
        
        return "<{$obj->getTagName()}$attrStr";
    }
}