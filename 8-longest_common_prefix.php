<?php

//https://leetcode.com/problems/longest-common-prefix/description/

/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {
    $prefix = "";    $min_length = 1000;
    foreach ($strs as $str) {
        $min_length = min($min_length, strlen($str));
    }
    for ($i = 0; $i < $min_length; $i++) {
        $char = $strs[0][$i];
        foreach ($strs as $str) {
            if ($str[$i] != $char) {
                return $prefix;
            }
        }
        $prefix .= $char;
    }

    return $prefix;
}


//Example 1:

$strs1 = ["flower","flow","flight"];  //"fl"

//Example 2:

$strs2 = ["dog","racecar","car"]; //Output: ""

echo longestCommonPrefix($strs1);
