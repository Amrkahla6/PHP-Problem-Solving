<?php

/**
 * @param Integer[] $arr
 * @return Integer[]
 */
function replaceElements($arr) {
    $max = -1;
    for($i = count($arr) - 1; $i >= 0; $i--){
        $tmp = $max;
        $max = max($max, $arr[$i]);
        $arr[$i] = $tmp;
    }
    return $arr;
}

$arr1 = [17,18,5,4,6,1]; //Output: [18,6,6,6,1,-1]

$arr2 = [400]; //Output: [-1]


print_r(replaceElements($arr2));