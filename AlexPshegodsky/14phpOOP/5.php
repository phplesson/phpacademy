<?php
include "3.php";

abstract class Registred extends Human
{
	protected $regDate;
	
	public function __construct($name, $age)
	{
		parent::__construct($name, $age);
		$this->regDate = date('Y:d:m');
		
	}
	
	public function __toString()
	{
		return "Name: $this->name, Age: $this->age, Registred: $this->regDate" . PHP_EOL;
	}
	
	public static function createObject($name,$age){
		
		return new self($name,$age);
	}
	
}

$registredHuman =

echo $registredHuman;