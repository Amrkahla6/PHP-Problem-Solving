<?php

/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isAnagram($s, $t) {
    return count_chars($s) == count_chars($t) ? 'true' : 'false';

    if (strlen($s) !== strlen($t)) return 'false';

    $s_array = str_split($s);

    $t_array = str_split($t);

    return count(array_diff($s_array,$t_array)) > 0 ? 'false' : 'true';
}


$s1 = "anagram";
$t1 = "nagaram"; //Output: true

$s2 = "rat";
$t2 = "car"; //Output: false

$s3 = "aacc";
$t3 = "ccac"; //Output: false

 print_r(isAnagram($s3, $t3));
