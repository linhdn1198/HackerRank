<?php

function migratoryBirds($arr) {
	$ary = array_fill(0, 6, 0);
    for($i = 0; $i < count($arr) ; $i++ )
	{
		$ary[$arr[$i]]++; 
	}
	$max = 0;
	$index;
	for($j = 0; $j < count($ary) ; $j++ ) {
		if ($ary[$j] > $max) {
			$max = $ary[$j];
			$index = $j;
		}
	}

	return $index;
}

echo migratoryBirds([1,4,4,4,5,3]);
