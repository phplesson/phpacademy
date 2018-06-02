<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.06.18
 * Time: 17:30
 */

namespace Algorithm\Simple;


use Algorithm\AbstractAlgorithm;
use Algorithm\IAlgorithm;

class Random extends AbstractAlgorithm
{
    protected function processDecision(IAlgorithm $object)
    {
        return self::POSSIBLE_ANSWER[array_rand(self::POSSIBLE_ANSWER)];
    }

    protected function processResult(IAlgorithm $object, $result)
    {
        return true;
    }

    public static function getInstance()
    {
        return self::createInstance();
    }
}