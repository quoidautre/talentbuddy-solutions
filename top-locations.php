<?php
function sort_locations($a, $b, $c) {
    
    $tmpArray = array($a,$b,$c);
    sort($tmpArray);
    
    echo implode(' ',$tmpArray);
}
?>
