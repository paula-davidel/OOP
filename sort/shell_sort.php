<?php 

//shell sort is a generalisation of Insertion Sort

$numbers = [21,25,100,98,89,77,33];

$gap  = floor(count($numbers)/2);

while ($gap > 0) {
 
    for ($i = 0; $i < count($numbers) - $gap; $i++) {
 
        $extractItem = $numbers[$i + $gap];
 
        $positionFound = $i + $gap;
 
        while (($positionFound - $gap) > 0 && $extractItem < $numbers[$positionFound - $gap]) {
 
            $numbers[$positionFound] = $numbers[$positionFound - $gap];
 
            $positionFound = $positionFound - $gap;
        }
 
        $numbers[$positionFound] = $extractItem;
    }
 
    $gap = floor($gap/2);
}
 
print_r($numbers);