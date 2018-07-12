<?php

class Human
{
	
	protected $name;
	protected $age;
	
	/**
	 * Human constructor.
	 * @param $name
	 * @param $age
	 */
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	
	public function __toString()
	{
		return "Name: $this->name, Age: $this->age" . PHP_EOL;
	}
	
	
}

$masha = new Human('Masha', '27');
$pasha = new Human('Pasha', '11');

