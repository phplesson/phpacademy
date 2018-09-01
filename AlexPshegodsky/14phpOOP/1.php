<?php

class Human
{
	protected $name = 'Unknown';
	protected $age = 'Unknown';
	

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}
	
	/**
	 * @param mixed $name
	 */
	public function setName($name): void
	{
		$this->name = $name;
	}
	
	/**
	 * @return mixed
	 */
	public function getAge()
	{
		return $this->age;
	}
	
	/**
	 * @param mixed $age
	 */
	public function setAge($age): void
	{
		$this->age = $age;
	}
	
	public function __toString()
	{
		return "Name: $this->name, Age: $this->age" . PHP_EOL;
	}
	
	
}

$masha = new Human();
$pasha = new Human();
$dima = new Human();
$masha->setAge(13);
$masha->setName('Masha');
$pasha->setAge(21);
$pasha->setName('Pasha');
//$dima->setAge('45');
$dima->setName('Dima');
echo $masha;
echo $dima;
echo $pasha;