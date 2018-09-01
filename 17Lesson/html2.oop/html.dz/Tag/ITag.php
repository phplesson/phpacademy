<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 5:22
 */

namespace Html\Dz\Tag;


use Html\Dz\IStringify;

interface ITag extends IStringify
{
    public function addAttribute(string $attrName, string $attrValue):ITag;
    public function addStringContent(string $text):ITag;
    public function addObjContent(IStringify $obj):ITag;
}