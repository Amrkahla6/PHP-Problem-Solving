<?php

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function productExceptSelf($nums) {

    $result = array_fill(0, count($nums), 1);

    $left = 1;
    for ($i = 0; $i < count($nums); $i++) {
        $result[$i] = $left;
        $left *= $nums[$i];
    }

    $right = 1;
    for ($i = count($nums) - 1; $i >= 0; $i--) {
        $result[$i] *= $right;
        $right *= $nums[$i];
    }

    return $result;
}

//Example 1:
$nums1 = [1,2,3,4]; //Output: [24,12,8,6]

//Example 2:
$nums2 = [-1,1,0,-3,3]; //Output: [0,0,9,0,0]

print_r(productExceptSelf($nums1));