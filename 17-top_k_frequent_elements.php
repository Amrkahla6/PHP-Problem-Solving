<?php
/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Integer[]
 */
function topKFrequent($nums, $k) {
    $map = array_count_values($nums);
    arsort($map);
    return array_keys(array_slice($map, 0, $k, true));
}

//Example 1:
$nums1 = [1,1,1,2,2,3];
$k1    = 2; //Output: [1,2]


//Example 2:
$nums2 = [1];
$k2    = 1; //Output: [1]

var_dump(topKFrequent($nums1,$k1));
