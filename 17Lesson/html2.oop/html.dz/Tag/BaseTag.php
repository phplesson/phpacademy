<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 8:04
 */

namespace Html\Dz\Tag;

class BaseTag extends AbstractTag
{
    public function __construct(array $config = [])
    {
        if (array_key_exists('tagType', $config) && is_int($config['tagType'])) {
            $this->tagType = $config['tagType'];
        }
        if (array_key_exists('tagName', $config) && is_string($config['tagName'])) {
            $this->tagName = $config['tagName'];
        }
        parent::__construct();
    }

    protected function hasAttribute(string $attr):bool
    {
        return true;
    }

    protected function isValidAttrValue(string $attr, string $value):bool
    {
        return true;
    }

    protected function compileAttributes()
    {
        $this->compiledAttributes = $this->attributes;
    }
}