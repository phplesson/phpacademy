<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.06.18
 * Time: 12:24
 */

namespace MyHtml\Form;


use MyHtml\Tag;

class Input extends Tag
{
    public function __construct(array $attributes)
    {
        foreach($attributes as $name => $value) {
            $this->setAttribute($name, $value);
        }

        $this->tagName = 'input';
    }

    protected function getPossibleAttributes():array
    {
        return [
            'name',
            'required',
            'value',
            'type',
            'size',
        ];
    }

    protected function getRequiredAttributes():array
    {
        return [
            'name',
            'value',
            'type',
        ];
    }

    protected function getDefaultAttributes():array
    {
        return [
            'type' => 'text',
        ];
    }

    protected function getTag($attributeStr, $content) {

        return "<{$this->tagName} $attributeStr />";
    }

    public function setContent($content) {
        return $this;
    }
}