<?php
function token_stemming($tokens, $suffixes) {
	$allToken = '';
	
    foreach ($tokens as $token) {
		
		foreach($suffixes as $suffix) {
			echo (substr($token,0,-3);
			if (strpos(substr($token,0,-3),$suffix) !== false) {
				$allToken .= preg_replace('/'.$suffix.'/', '', $token, 1) ."\n";	
			}
		}
    }
	echo $allToken;
}

function reversing_array($item) {
	return strrev($item);
}

?>
