<?php
function tokenize_query($query, $punctuation) {
	$words = str_replace(str_split($punctuation),' ',$query);	
	$words = explode(' ',$words);
	
	array_walk($words,'display');
}

function display($item) {
	echo trim($item),"\n";
}

$query= ", which isn't that surprising I guess.";
tokenize_query($query,",'.");

?>
