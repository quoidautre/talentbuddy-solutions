<?php
function count_successful_students($grades, $min_grade) {
    $successfulStudents=array();
    $pos=0;

    sort($grades);
    //var_dump($a);

    foreach ($grades as $item) {
    	if ($item < $min_grade) $pos++;
    	else break;
    }
    //var_dump($pos);

    $successfulStudents = array_slice($grades,$pos);
    //var_dump($successfulStudents);

    echo count($successfulStudents);
}

?>
