<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 14:29
 *
 *
 */

require_once ('../task3/Human3.php');

class Human4 extends Human3{
    protected $timeMark;

    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
        $this->timeMark = date('l jS \of F Y h:i:s A');
    }

    public function __toString()
    {
        return parent::__toString().", время создания: $this->timeMark";
    }
}