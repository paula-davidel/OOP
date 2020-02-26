<?php 

/* Selection Sort works by maintaining a sorted sub-list, finding the smallest item from the master list and swap it to the last element of the sub-list until all items are sorted. */
$numbers = [21,25,100,98,89,77];
$sorted = [];
$length = count($numbers);

for($i=0;$i<$length;$i++)
{
	// initial: i=0 => $sorted[0] = 21;
	$sorted[$i] = $numbers[$i];

	//find the smallest item

	$smallestIndex = $i;

	for($j=$i;$j<$length;$j++)
	{
		if($numbers[$j]<$numbers[$smallestIndex])
		{
			$smallestIndex =$j;
		}
	}

	//swap

	$aux = $sorted[count($sorted)-1];
	$sorted[count($sorted)-1] = $numbers[$smallestIndex];
	$numbers[$smallestIndex] = $aux;
}

	print_r($sorted);exit;