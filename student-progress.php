<?php
function is_sorted($grades) {
    $taille = count($grades);
    $progress = 1;
    
    if ($taille > 0) {
        for ($i=0 ; $i < $taille ; $i++) {
				if ($i != ($taille-1)) {
                    if ($grades[$i] > $grades[$i+1]) {                        
                        $progress = 0;
                        break;;
                    }
				}
        }
    }
    echo $progress;
}

?>
