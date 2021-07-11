<?php

function gradingStudents($grades) {
    for ($i = 0; $i < count($grades); $i++) {
        if ($grades[$i] >= 38 ) {
            $a = 5 - ($grades[$i] % 5);
            if ($a < 3 ) {
                $grades[$i] += $a;
            }
        }
    }
	
	return $grades;
}

$ss = gradingStudents([4,73,67,38,33]);

for ($i = 0; $i < count($ss); $i++) {
	echo $ss[$i] . '  ';
}
