<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.06.18
 * Time: 11:05
 */

namespace Game\Student\TeacherExample;


use Game\Algorithm\AbstractAlgorithm;
use Game\Algorithm\IAlgorithm;

class DZExample extends AbstractAlgorithm
{

    protected $lastDecision;

    protected $myHistory = [];
    protected $revengeCounters = [];

    protected function incRevengeCounter($counter) {
        if (!isset($this->revengeCounters[$counter])) {
            $this->revengeCounters[$counter] = 1;
        } else {
            $this->revengeCounters[$counter]++;
        }
    }

    protected function getRevengeCounter($counter) {
        if (isset($this->revengeCounters[$counter])) {
            return $this->revengeCounters[$counter];
        }
        
        return 0;
    }

    protected function processDecision(IAlgorithm $object)
    {
        // TODO: Implement processDecision() method.

        $familyCounter = $this->getRevengeCounter($object->getSerName());
        $objectCounter = $this->getRevengeCounter($object->getName());
        
        if ($objectCounter > 3 || $objectCounter > 1 && $familyCounter > $objectCounter * 3) {
            return self::PLAY_PASS;
        }
        
        return self::POSSIBLE_ANSWER[array_rand(self::POSSIBLE_ANSWER)];
    }

    protected function processResult(IAlgorithm $object, $result, $addRate)
    {
        // TODO: Implement processResult() method.

        //detect object revenge
        if (isset($this->myHistory[$object->getName()])) {
            if ($this->myHistory[$object->getName()] == $result) {
                //possible revenge
                $this->incRevengeCounter($object->getName());
            }
        }

        //detect algorithm revenge
        if (isset($this->myHistory[$object->getSerName()])) {
            if ($this->myHistory[$object->getSerName()] == $result) {
                //possible revenge
                $this->incRevengeCounter($object->getSerName());
            }
        }
    }

    /**
     * @return static
     */
    public static function getInstance()
    {
        // TODO: Implement getInstance() method.
        return  self::createInstance();
    }
}