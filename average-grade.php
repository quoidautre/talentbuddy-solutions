<?php
function compute_average_grade($grades) {

    $uniqueGrade = array_unique($grades);    
    $sum = array_sum($uniqueGrade);
    
    echo floor($sum/count($uniqueGrade));
}
?>
