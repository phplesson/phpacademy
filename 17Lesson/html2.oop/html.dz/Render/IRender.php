<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.06.18
 * Time: 14:42
 */

namespace Html\Dz\Render;


interface IRender
{
    public function renderObject(ITag $obj):string;
}