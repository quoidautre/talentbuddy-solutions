<?php 

function ArithGeo($arr) {  
	$nbElements = count($arr);
  
    if (($arr[1] - $arr[0]) === ($arr[$nbElements-1] - $arr[$nbElements-2])) {
      return "Arithmetic";
    } else if (($arr[1] / $arr[0]) === ($arr[$nbElements-1] / $arr[$nbElements-2])) {
      return "Geometric";
    } else { 
      return "-1"; 
    }  
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo ArithGeo(fgets(fopen('php://stdin', 'r')));  

?>















  
