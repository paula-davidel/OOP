<?php

// encapsulation
class Person
{
	private $name;

	public function SetName($name)
	{
		$this->name=$name;
	}

	public function GetName()
	{
		return $this->name;
	}

}

	$employ = new Person();
	$employ->SetName('Popescu');
	echo $employ->GetName();