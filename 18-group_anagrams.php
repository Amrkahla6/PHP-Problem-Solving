<?php

/**
 * @param String[] $strs
 * @return String[][]
 */
function groupAnagrams($strs) {

    $result = [];

    foreach ($strs as $str) {

        $sorted = str_split($str);

        sort($sorted);

        $key = implode('', $sorted);

        if (!isset($result[$key])) {

            $result[$key] = [$str];
        }else{

            $result[$key][] = $str;
        }
    }

    return array_values($result);
}

//Example 1:
$strs1 = ["eat","tea","tan","ate","nat","bat"]; //Output: [["bat"],["nat","tan"],["ate","eat","tea"]]

//Example 2:
$strs2 = [""]; //Output: [[""]]

//Example 3:
$strs3 = ["a"]; //Output: [["a"]]

var_dump(groupAnagrams($strs1));