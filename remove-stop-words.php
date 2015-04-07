<?php
function remove_stopwords($query, $stopwords) {
    foreach($stopwords as $stop) {
        $pos = array_search($stop,$query);
        
        if ($pos !== false) {
			foreach(array_keys($query,$stop) as $key) {
				unset($query[$key]);
			}			
		}
    }
    array_walk($query,'display');
}

function display($item) {
    echo trim($item),"\n";
}
?>
