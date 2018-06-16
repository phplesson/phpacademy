<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.06.18
 * Time: 12:41
 */

namespace MyHtml\Inline;


use MyHtml\Tag;

class BR extends Tag
{
    public function __construct()
    {
        $this->tagName = 'br';
    }

    protected function getPossibleAttributes():array
    {
        return [];
    }

    protected function getRequiredAttributes():array
    {
        return [];
    }

    protected function getDefaultAttributes():array
    {
        return [];
    }
    
    protected function getTag($attributeStr, $content)
    {
        return '<br />';
    }
}