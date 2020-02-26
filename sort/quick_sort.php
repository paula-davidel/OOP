<?php

//quick sort = similar to Merge Sort
/* choosing an element(pivot) from the list and placing elements that are less than the pivot on its left side and elements that are greater than the pivot on its right side */

$numbers = [21,25,100,98,89,77];

function quickSort($data)
{
	$length= count($data);

	if($length == 0)
	{
		return $data;
	}

	$pivot = $data[0];
	$left = $right = [];

	for($i=1;$i<$length;$i++)
	{
		if($data[$i]<$pivot)
		{
			$left[]=$data[$i];
		}
		else
		{
			$right[]=$data[$i];
		}
	}
	// array_merge =  the input arrays have the same string keys, then the later value for that key will overwrite the previous one
	// The array_merge() function merges one or more arrays into one array.
	return array_merge(quickSort($left),array($pivot),quickSort($right));
}
	print_r(quickSort($numbers));exit;