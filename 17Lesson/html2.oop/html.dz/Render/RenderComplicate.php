<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 7:59
 */

namespace Html\Dz\Render;


class RenderComplicate extends AbstractRender
{
    protected function makeContent(array $content) {
        $str = '';
        foreach ($content as $value) {
            $str .= (string)$value . PHP_EOL;
        }
        return $str;
    }
    public function renderObject(ITag $obj):string
    {
        $str = parent::renderObject($obj); // TODO: Change the autogenerated stub
        
        $content = $this->makeContent($obj->getContent());
        
        return "$str>$content</{$obj->getTagName()}>";
    }
}