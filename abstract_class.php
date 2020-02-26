<?php 

//abstract class

abstract class Vehicle
{
	abstract public function startEngine();

	public function stopEngine()
	{
		echo "Engine stoped";
	}
}

class Car extends Vehicle
{
	public function startEngine()
	{
		echo "Engine started";
	}
}

$car = new Car();
echo $car->startEngine();
echo "<br>";
echo $car->stopEngine();