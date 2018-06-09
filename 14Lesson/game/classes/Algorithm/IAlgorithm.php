<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.06.18
 * Time: 17:15
 */
namespace Game\Algorithm;

interface IAlgorithm
{
    /**
     * @return static
     */
    public static function getInstance();
    
    /**
     * depends a Class 
     *  - the same class = the same serName
     *  - different classes = different serNames
     * @return string
     */
    public function getSerName();

    /**
     * depends object 
     *  - the same object = the same names
     *  - different objects = differents names
     * 
     * @return string
     */
    public function getName();

    /**
     * @param IAlgorithm $object
     * @return integer
     */
    public function playGame(IAlgorithm $object);

    /**
     * @param IAlgorithm $object
     * @param $result
     * @param $addRate
     * @return mixed
     */
    public function saveResult(IAlgorithm $object, $result, $addRate);
}