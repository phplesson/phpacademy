<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 5:13
 */

namespace Html\Dz\Factory;


interface ITag extends \Html\Dz\Render\ITag
{
    const TYPE_SIMPLE = 1;
    const TYPE_COMPLICATED = 2;
    CONST POSSIBLE_TYPE = [1,2];
    public function getTagType():int;
}