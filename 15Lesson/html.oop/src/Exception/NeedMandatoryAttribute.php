<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.06.18
 * Time: 11:36
 */

namespace MyHtml\Exception;


class NeedMandatoryAttribute extends \RuntimeException
{
    public $tagName;
    public $mandatoryAttributes = [];
    
    public function __construct($message, $code, \Exception $previous, $tagName = null, $attributes = [])
    {
        parent::__construct($message, $code, $previous);
        $this->tagName = $tagName;
        $this->mandatoryAttributes = $attributes;
    }
    
    public function getMessage() {
        $message = parent::getMessage();
        
        $message .= ' TagName: ' . $this->tagName . '.';
        $message .= ' NeedAttributes: ' . implode(',', $this->mandatoryAttributes) . '.';
        
        return $message;
    }
}