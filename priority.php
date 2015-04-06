<?php
function count_configurations($a, $b, $c, $n) {
    $counted = 0;
    for ($i = 0; $i <= $a; $i++) {
        for ($j = 0; $j <= $b; $j++) {
            for ($k = 0; $k <= $c; $k++) {
                if ($i + $j + $k == $n) { $counted++; }
            }
        }
    }
    echo $counted;
}
?>
