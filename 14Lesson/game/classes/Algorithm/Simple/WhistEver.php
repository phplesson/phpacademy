<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02.06.18
 * Time: 4:57
 */

namespace Game\Algorithm\Simple;


use Game\Algorithm\AbstractAlgorithm;
use Game\Algorithm\IAlgorithm;

class WhistEver extends AbstractAlgorithm
{
    protected function processDecision(IAlgorithm $object)
    {
        return self::PLAY_WHIST;
    }

    protected function processResult(IAlgorithm $object, $result, $addRate)
    {
        return true;
    }

    public static function getInstance()
    {
        return self::createInstance();
    }
}