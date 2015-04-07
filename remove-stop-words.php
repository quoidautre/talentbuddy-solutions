<?php
function remove_stopwords($query, $stopwords) {
    $query = array_unique($query);
    
    foreach($stopwords as $stop) {
        $pos = array_search($stop,$query);
        
        if ($pos) unset($query[$pos]);
    }
    array_walk($query,'display');
}

function display($item) {
    echo trim($item),"\n";
}
?>
