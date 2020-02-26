<?php 

//bubble sort

$numbers = [21,25,100,98,89,77];
$length = count($numbers);

for($i=0;$i<$length-1;$i++)
{
	for($j=0;$j<$length-1;$j++)
	{
		if($numbers[$j] > $numbers[$j+1])
		{
			$aux = $numbers[$j];
			$numbers[$j] = $numbers[$j+1];
			$numbers[$j+1] = $aux;
		}
	}
	
}
print_r($numbers);exit;