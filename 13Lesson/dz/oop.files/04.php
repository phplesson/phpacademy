<?php
class Person {
    protected $name;
    protected $age;
    
    //it is called when object is creating(at the end of a creation process)
    public function __construct($param1, $param2)
    {
        $this->name = $param1;
        $this->age = $param2;
        
        echo 'constructor() run' . PHP_EOL;
    }
    
    // it is called when object is deleting(at the start of a deletion process)
    public function __destruct()
    {
        echo 'destructor() run' . PHP_EOL;
    }
    
    /*
     * so, during working of both function object does exist!
     * $this - auto created link to the current object.
     * The same meaning $link in 13Lesson/06/*.php files
     */
}
// functions with name like __XXXXXX - it is special functions
// which are called by php in specific situation.
// normally you don't call them directly

$a = new Person('Vasya', 22);
echo 'some code runs' . PHP_EOL;

//the same: $a = 'another value'; $a = null; - the object will be dead after any of these actions
unset($a);
