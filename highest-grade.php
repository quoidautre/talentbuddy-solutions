<?php
function max_grade($grades) {
    
  $a=array_unique($grades);
  rsort($a);
  echo $a[0];

}
?>
