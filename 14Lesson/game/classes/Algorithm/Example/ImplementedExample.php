<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.06.18
 * Time: 23:56
 */

namespace Game\Algorithm\Example;


use Game\Algorithm\AbstractAlgorithm;
use Game\Algorithm\IAlgorithm;

/**
 * Class ImplementedExample
 * 
 * implementation an aye for an aye logic
 *
 * @package Game\Algorithm\Example
 */
class ImplementedExample extends AbstractAlgorithm
{

    /**
     * save our last decision = ::processDecision()
     * 
     * @var integer
     */
    protected $lastDecision;

    /**
     * an array contains last decisions of other players(objects)
     * 
     * @var integer[]
     */
    protected $objects = [];

    /**
     * use this value, if ::$objects does not have information about a player($object)
     * 
     * @var integer
     */
    protected $defaultDecision;

    /**
     * this method is called before playing with $object
     * 
     * @param IAlgorithm $object
     * @return int
     */
    protected function processDecision(IAlgorithm $object)
    {
        // TODO: Implement processDecision() method.
        $objectName = $object->getName();
        
        if (isset($this->objects[$objectName])) {
            $this->lastDecision = $this->objects[$objectName];
        } else {
            $this->lastDecision = $this->defaultDecision;
        }
        
        return $this->lastDecision;
    }

    /**
     * this method is called after playing with $object
     * 
     * @param IAlgorithm $object
     * @param $result
     * @param $addRate
     */
    protected function processResult(IAlgorithm $object, $result, $addRate)
    {
        // TODO: Implement processResult() method.
        
        $this->objects[$object->getName()] = $result;
    }

    /**
     * @return static
     */
    public static function getInstance()
    {
        // TODO: Implement getInstance() method.
        
        $obj = parent::createInstance();
        $obj->defaultDecision = self::PLAY_PASS;
        
        return $obj;
    }
}