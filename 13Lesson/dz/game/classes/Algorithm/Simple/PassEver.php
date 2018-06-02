<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02.06.18
 * Time: 5:00
 */

namespace Game\Algorithm\Simple;


use Game\Algorithm\AbstractAlgorithm;
use Game\Algorithm\IAlgorithm;

class PassEver extends AbstractAlgorithm
{
    protected function processDecision(IAlgorithm $object)
    {
        return self::PLAY_PASS;
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