<?php

// declara metoda care va fi suprascrisa in clasa care va implementa interfata, fara a o declara aici, ci in clasa
interface Book
{
	public function getAuthor();
}

// suprascrierem metoda declarata in interfata
class Novel implements Book
{
	public function getAuthor()
	{
		$output = "Who wrote the following novels?<br>
		 <ul><li>John</li><li>Blah</li></ul>";

		 return $output;
	}
}

$answer = new Novel();
echo $answer->getAuthor();