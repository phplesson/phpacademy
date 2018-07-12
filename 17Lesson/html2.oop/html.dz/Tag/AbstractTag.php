<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 5:49
 */

namespace Html\Dz\Tag;


use Html\Dz\IStringify;
use Html\Dz\Render\ITag;
use Html\Dz\Render\TagRenderable;

abstract class AbstractTag implements ITag, \Html\Dz\Factory\ITag
{
    use TagRenderable;

    /**
     * @var string
     */
    protected $tagName;
    /**
     * @var int
     */
    protected $tagType;
    
    protected $attributes = [];
    
    protected $compiledAttributes = null;

    /**
     * @var String[]|IStringify[]
     */
    protected $content = [];
    
    public function __construct()
    {        
        if (empty($this->tagName)) {
            throw new \RuntimeException('tagName could not be empty');
        }
        if (empty($this->tagType) || !in_array($this->tagType, \Html\Dz\Factory\ITag::POSSIBLE_TYPE)) {
            throw new \RuntimeException('tagType should has got a proper value');
        }
    }
    
    abstract protected function hasAttribute(string $attr):bool;
    abstract protected function isValidAttrValue(string $attr, string $value):bool;
    abstract protected function compileAttributes():void;
    
    protected function setAttribute(string $attr, string $value) {
        $this->attributes[$attr] = $value;
        $this->compiledAttributes = null;
    }

    final public function addAttribute(string $attrName, string $attrValue):ITag
    {
        if ($this->hasAttribute($attrName) && $this->isValidAttrValue($attrName, $attrValue)) {
            $this->setAttribute($attrName, $attrValue);
        }
        
        return $this;
    }

    public function addStringContent(string $text):ITag
    {
        $this->content[] = $text;
        return $this;
    }

    public function addObjContent(IStringify $obj):ITag
    {
        $this->content[] = $obj;
        return $this;
    }

    final public function getAttributes():array
    {
        if ($this->compiledAttributes === null) {
            $this->compileAttributes();
        }
        
        return $this->compiledAttributes;
    }

    public function getTagType():int
    {
        return $this->tagType;
    }

    public function getTagName():string
    {
        return $this->tagName;
    }

    public function getContent():array
    {
        return $this->content;
    }
}