<?php
include "3.php";

class Registred extends Human
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
	
}

$registredHuman = new Registred('Petro', 12);

echo $registredHuman;