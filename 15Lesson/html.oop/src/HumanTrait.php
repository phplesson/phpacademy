<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.06.2018
 * Time: 12:29
 */

namespace MyHtml;


trait HumanTrait
{
    protected $name;
    public function setName($name) {
        $this->name = $name;
    }
}