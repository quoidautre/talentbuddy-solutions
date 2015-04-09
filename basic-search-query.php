<?php
function search_query($query, $pages) {
    $regex ="";
    $resultMatched = array();
    $match = 0;
    
    foreach ($query as $q) {
         $regex .=  '('.$q.').*';
    }
    // remove last ".*"    
    $regex = substr_replace($regex,'',-2);
    //echo $regex."\n";
    
    foreach ($pages as $page) {
        preg_match("/".$regex."/", $page, $output_array);
        
        if (count($output_array) >= 1) {
            // extract array result
            $resultMatched = array_slice($output_array,1);
            // comparaison
            if ($query==$resultMatched) $match++;
        }
        
    }
    echo $match;
}


?>
