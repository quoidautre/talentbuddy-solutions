<?php
function compute_prediction($n, $w) {
    // Write your code here
    // To print results to the standard output you can use print
    // Example: print "Hello world!";
    $grows = (7/100);
    $val = $n;
    
    for ($i=1;$i<=$w;$i++) {
        $val += ($val*$grows);
    }
    
    echo floor($val);
}


?>
