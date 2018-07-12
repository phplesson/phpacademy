<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 5:12
 */

namespace Html\Dz\Factory;


use Html\Dz\Render\IRender;

interface IRenderFactory
{
    public function getRenderForMe(ITag $obj):IRender;
}