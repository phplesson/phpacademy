<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.06.18
 * Time: 11:14
 */

namespace MyHtml;

use MyHtml\Exception\NeedMandatoryAttribute;

abstract class Tag
{
    protected $attributes = [];
    
    protected $content;
    
    protected $tagName;
    
    abstract protected function getPossibleAttributes():array;

    abstract protected function getRequiredAttributes():array;
    
    abstract protected function getDefaultAttributes():array;
    
    public function hasAttribute($name) {
        return in_array($name, $this->getPossibleAttributes());
    }
    
    public function setAttribute($name, $value) {
        if ($this->hasAttribute($name)) {
            $this->attributes[$name] = $value;
        }
        return $this;
    }

    /**
     * @param $content null|Tag|string
     * @return bool
     */
    protected function isAcceptableContent($content) {
        return $content === null || ($content instanceof Tag) || is_string($content);
    }
    
    protected function putContent($content) {
        $this->content = $content;
    }
    
    public function setContent($content) {
        if ($this->isAcceptableContent($content)) {
            $this->putContent($content);
        }
        return $this;
    }
    
    protected function compileAttributes() {
        $mandatory = $this->getRequiredAttributes();
        
        $needDefaults = array_diff($mandatory, array_keys($this->attributes));
        $possibleDefaults = array_intersect($needDefaults, array_keys($this->getDefaultAttributes()));
        $missedDefaults = array_diff($needDefaults, $possibleDefaults);
        
        if (count($missedDefaults) > 0) {
            throw new NeedMandatoryAttribute('It expects more attributes', 0, null, $this->tagName, $mandatory);
        }
        
        $defaultsValues = array_merge(array_flip($possibleDefaults), $this->getDefaultAttributes());
        
        return $this->attributes + $defaultsValues;
    }

    protected function getAttributeString() {
               
        $pairs = $this->compileAttributes();
        
        array_walk($pairs, function(&$value, $key){
            $value = $key . '="' . $value . '"';
        });

        return implode(' ', $pairs);
    }

    protected function getContent() {
        return (string)$this->content;
    }

    protected function getTag($attributeStr, $content) {

        return "<{$this->tagName} $attributeStr>$content</{$this->tagName}>";
    }
    
    public function __toString()
    {
        return $this->getTag($this->getAttributeString(), $this->getContent());
    }
}