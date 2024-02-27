<?php

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function findDisappearedNumbers($nums) {
    $count = count($nums);
    $range = range(1,$count);

    return array_diff($range,$nums);
}


$nums1 = [4,3,2,7,8,2,3,1]; //output: [5,6]

$nums2 = [1,1]; //Output: [2]

print_r(findDisappearedNumbers($nums2));