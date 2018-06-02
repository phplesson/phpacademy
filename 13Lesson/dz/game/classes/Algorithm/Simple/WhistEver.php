<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02.06.18
 * Time: 4:57
 */

namespace Algorithm\Simple;


use Algorithm\AbstractAlgorithm;
use Algorithm\IAlgorithm;

class WhistEver extends AbstractAlgorithm
{
    protected function processDecision(IAlgorithm $object)
    {
        return self::PLAY_WHIST;
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