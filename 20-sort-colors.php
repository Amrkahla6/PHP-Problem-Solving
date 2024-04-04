<?php
/**
 * @param Integer[] $nums
 * @return NULL
 */
function sortColors(&$nums) {

    $left = 0;
    $right = count($nums) - 1;

    for ($i = 0; $i <= $right; $i++) {
        if ($nums[$i] == 0) {
            $nums[$i] = $nums[$left];
            $nums[$left] = 0;
            $left++;
        } elseif ($nums[$i] == 2) {
            $nums[$i] = $nums[$right];
            $nums[$right] = 2;
            $right--;
            $i--;
        }
    }

    return $nums;
}

//Example 1:
$nums1 = [2,0,2,1,1,0]; //Output: [0,0,1,1,2,2]

//Example 2:
$nums2 = [2,0,1]; //Output: [0,1,2]

print_r(sortColors($nums1));