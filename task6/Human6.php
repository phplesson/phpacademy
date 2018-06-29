<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 15:17
 *
 */

class Human6{
    protected static $timeMark;
    protected static $name;
    protected static $age;
    protected static $uniqId;
    protected static $counter=0;
    protected static $objArray=[];

    public function __construct($name,$age)
    {
        static::$uniqId=uniqid();
        static::$timeMark = date('l jS \of F Y h:i:s A');
        static::$name = $name;
        static::$age = $age;
        self::$counter++;
        self::$objArray = ['counter'=>self::$counter,
                            self::$uniqId=> array(
                                'name'=>self::$name,
                                'age'=>self::$age,
                                'dateCreation'=>static::$timeMark)];
    }
    public function __destruct()
    {
        self::$counter--;
        unset(static::$objArray[static::$uniqId]);

    }

    public function getObj(){
        return "Имя: ".self::$name.
            ', возраст: '.self::$age.
            ', время создания: '.self::$timeMark.PHP_EOL.
            var_dump(self::$objArray);
    }
}