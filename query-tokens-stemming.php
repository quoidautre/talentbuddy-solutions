<?php
function token_stemming($tokens, $suffixes) {
   foreach( $tokens as $t ){
        $c = $t;
        foreach( $suffixes as $s ){
            $s = preg_quote($s);
            $suf = preg_replace("/(".$s."$)/S","",$t);
            $c = (strlen($c)>strlen($suf))?$suf:$c;
        }
        echo $c."\n";
    }    
}
?>


<?php
function token_stemming($tokens, $suffixes) {
    // Write your code here.
    $out = [];
    usort($suffixes, function($a, $b) {
        return strlen($b) - strlen($a);
    });
    
    foreach ($tokens as $token) {
        $pattern = '/(' . implode('|', $suffixes) . ')$/';
        $out[] = preg_replace($pattern, '', $token);
    }
    $out = implode("\n", $out);
    echo $out;
}
?>

<?php
function token_stemming($tokens, $suffixes) {
    function cmp($a, $b) {
        return strlen($b)-strlen($a);
    }

    // sort suffixes in descending length
    usort($suffixes, "cmp");

    foreach ($tokens as $t) {
        $matches = false;
        foreach ($suffixes as $s) {
            if (preg_match("/(.*){$s}$/", $t, $matches)) {
                echo $matches[1] . PHP_EOL;
                break;
            }
        }
        
        if (!$matches)
            echo $t . PHP_EOL;
    }
}
?>

<?php
function compare_len($a, $b)
{
    return (strlen($a)<strlen($b));
}
function remove_suffix(&$token, $key, $suffixes)
{
    usort($suffixes, "compare_len");
    foreach ($suffixes as $suffix)
    {
        if ($token == $suffix) //add stupid test to make this evaluation work
        {
            $token = "";
            break;
        }
        if ($token!=basename($token, $suffix)) 
            {
                $token = basename($token, $suffix);
                break;
            }
    }
}
function token_stemming($tokens, $suffixes) {
    array_walk($tokens,'remove_suffix', $suffixes);
    echo implode("\n", $tokens);
}
?>
