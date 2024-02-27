<?php

/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isIsomorphic($s, $t) {

    $s = str_split($s);
    $t = str_split($t);

    if(count($s) !== count($t)) return 'false';

    $sMap = [];
    $tMap = [];

    for($i = 0; $i < count($s); $i++){
        if(isset($sMap[$s[$i]])){
            if($sMap[$s[$i]] !== $t[$i]) return 'false';
        }else{
            if(isset($tMap[$t[$i]])) return 'false';
            $sMap[$s[$i]] = $t[$i];
            $tMap[$t[$i]] = $s[$i];
        }
    }
    return 'true';
}

//Example 1:

$s1 = "egg";
$t1 = "add"; //Output: true


//Example 2:

$s2 = "foo";

$t2 = "bar"; Output: //false

//Example 3:

$s3 = "paper";
$t3 = "title"; //Output: true


//Example4
$s4 = "a";
$t4 = "a"; //true


//Example5
$s5 = "bbbaaaba";
$t5 = "aaabbbba";

echo isIsomorphic($s1,$t1);