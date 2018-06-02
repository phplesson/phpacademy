<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.06.18
 * Time: 17:20
 */

namespace Algorithm;

abstract class AbstractAlgorithm implements IAlgorithm
{
    /**
     * play options
     */
    const PLAY_PASS = 0;
    const PLAY_WHIST = 1;

    /**
     * list of all possible play options
     */
    const POSSIBLE_ANSWER = [0, 1];

    /**
     * it depends on Class(algorithm)
     *
     * @var string
     */
    private static $serName;

    /**
     * it depends on object instance. It is a unique identifier of an instance.
     *
     * @var string
     */
    private $name;

    /**
     * it is a semaphore to control a call order of playGame()|saveResult() methods
     *
     * @var bool
     */
    private $readyToPlay = true;

    /**
     * A single way to make an instance of a class
     *
     * @return static
     */
    final protected static function createInstance() {
        if (empty(static::$serName)) {
            static::$serName = get_called_class();
        }
        
        return new static();
    }

    /**
     * AbstractAlgorithm constructor. It generates an unique identifier for every instance.
     */
    final private function __construct()
    {
        $this->name = uniqid($this->getSerName(), true);
    }

    /**
     * return a serName of an object
     *
     * @return string
     */
    final public function getSerName()
    {
        return static::$serName;
    }

    /**
     * return a name of an object
     *
     * @return string
     */
    final public function getName()
    {
        return $this->name;
    }

    /**
     * Only control a call order.
     * it uses a processDecision() method to make a decision for a round and return as it is.
     *
     * @param IAlgorithm $object
     * @return null|integer
     */
    final public function playGame(IAlgorithm $object)
    {
        if (!$this->readyToPlay) {
            trigger_error('playGame() is called unexpectedly', E_USER_ERROR);
            return null;
        }

        $this->readyToPlay = false;

        $answer = $this->processDecision($object);
        
        if (!in_array($answer, self::POSSIBLE_ANSWER)) {
            trigger_error('impossible answer', E_USER_ERROR);
        } else {
            return $answer;
        }
    }

    /**
     * Only control a call order.
     * It uses a processResult() method for handle the result of a round.
     * 
     * @param IAlgorithm $object
     * @param $result
     * @param $addRate
     * @return null|mixed
     */
    final public function saveResult(IAlgorithm $object, $result, $addRate)
    {
        if ($this->readyToPlay) {
            trigger_error('saveResult() is called unexpectedly', E_USER_ERROR);
            return null;
        }

        $this->readyToPlay = true;

        return $this->processResult($object, $result, $addRate);
    }

    abstract protected function processDecision(IAlgorithm $object);
    abstract protected function processResult(IAlgorithm $object, $result);
}