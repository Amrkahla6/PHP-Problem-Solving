<?php
/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isSubsequence($s, $t) {
    $i = 0;
    $j = 0;

    while($i < strlen($s) && $j < strlen($t)){
        if($s[$i] == $t[$j]){
            $i++;
        }
        $j++;
    }
    return $i == strlen($s) ? 'true' : 'false';
}

//Example 1:

$s1 = "abc";
$t1 = "ahbgdc"; //Output: true;

//Example 2:
$s2 = "axc";
$t2 = "ahbgdc"; //Output: false

echo isSubsequence($s1, $t1);