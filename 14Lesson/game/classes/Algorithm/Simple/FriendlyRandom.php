<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02.06.18
 * Time: 5:06
 */

namespace Game\Algorithm\Simple;


use Game\Algorithm\IAlgorithm;

class FriendlyRandom extends Random
{
    protected function processDecision(IAlgorithm $object)
    {
        if ($object->getSerName() == $this->getSerName()) {
            return self::PLAY_PASS;
        }
        
        return parent::processDecision($object);
    }
}