<?php 

// abstraction
class Tv
{
	private $isOn = false;

	public function turnOn()
	{
		$this->isOn=true;
	}

	public function turnOff()
	{
		$this->isOn = false;
	}
}

	$tv = new TV();
	$tv->turnOn();
	$tv->turnOff();