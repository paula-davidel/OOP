<?php

//merge sort
/* splitting a list in half until both halves are sorted, then the operation merge is performed to combine two lists into one sorted new list.  */

$numbers = [21,25,100,98,89,77];

function mergeSort($data)
{
	$length = count($data);

	if($length <= 1) 
	{
		return $data;
	}
		// syntax:  array_slice(array, offset, length) 
		/*

		OFFSET
		If offset is positive, the sequence will start at that offset in the array.

		If offset is negative, the sequence will start that far from the end of the array. 

		LENGTH
		If length is given and is positive, then the sequence will have up to that many elements in it.

		If length is given and is negative then the sequence will stop that many elements from the end of the array. 
		*/

		$left = array_slice($data, 0, intval($length/2));
		$right = array_slice($data, intval($length/2));

		$left = mergeSort($left);
		$right = mergeSort($right);

		return merge($left,$right);
}

function merge($left,$right)
{
	$sorted=[];
	
	while(count($left)>0 && count($right)>0)
	{
		if($left[0] < $right[0])
		{
			//shifts the first value of the array off and returns it, shortening the array by one element and moving everything down. All numerical array keys will be modified to start counting from zero while literal keys won't be affected. 
			$firstLeft = array_shift($left);
			$sorted[] = $firstLeft;
		}
		else
		{
			$firstRight= array_shift($right);
			$sorted[] = $firstRight;
		}
	}
	for($i=0; $i<count($left);$i++)
	{
		$sorted[] = $left[$i];
	}
	for($i=0; $i<count($right);$i++)
	{
		$sorted[] = $right[$i];
	}

	return $sorted;
}

	print_r(mergeSort($numbers));exit;
	/*

    array_slice: It extracts a slice of the array. This function is handy when we want to a certain part of the array.
    array_shift: It remove an element from the beginning of an array. This function is handy when we want to remove the first element of the array.

	*/