<?php

//insertion sort

$numbers = [21,25,100,98,89,77];
$length = count($numbers);

for($i=0;$i<$length;$i++)
{
	//I added first element in sub-list ($insertion)
	$aux = $numbers[$i];
	$insertion[] = $aux;
	$position = $i;

	//I extract the first element and then run the loop 
	while($position > 0 && $aux < $insertion[$position-1])
	{
		$insertion[$position] = $insertion[$position-1];
		$position = $position-1;
	}
	$insertion[$position] = $aux;
}
	print_r($insertion);exit;