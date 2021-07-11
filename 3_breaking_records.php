<?php

function breakingRecords($scores) {
	$count_min = 0;
	$count_max = 0;
	$min = $scores[0];
	$max = $scores[0];
	for($i = 1; $i < count($scores); $i++) {
		if ($scores[$i] < $min) {
			$min = $scores[$i];
			$count_min++;
		}
		
		if ($scores[$i] > $max) {
			$max = $scores[$i];
			$count_max++;
		}
	}

	return [$count_max, $count_min];
}
$breakingRecords = breakingRecords([3,4,21,36,10,28,35,5,24,42]);

echo $breakingRecords[0] . '  ' . $breakingRecords[1];
