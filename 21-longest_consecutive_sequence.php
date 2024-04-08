<?php


/**
 * @param Integer[] $nums
 * @return Integer
 */
function longestConsecutive($nums) {

    if (count($nums) == 0) {
        return 0;
    }
    $nums = array_unique($nums);
    sort($nums);

    $max   = 1;
    $count = 1;

    for ($i = 1; $i < count($nums); $i++) {
        if ($nums[$i] == $nums[$i - 1] + 1) {
            $count++;
        } elseif ($nums[$i] == $nums[$i - 1]) {
            continue;
        } else {
            $max = max($max, $count);
            $count = 1;
        }
    }

    return max($max, $count);
}

//Given an unsorted array of integers nums, return the length of the longest consecutive elements sequence. You must write an algorithm that runs in O(n) time.

//Example 1:
$nums1 = [100,4,200,1,3,2]; //Output: 4 Explanation: The longest consecutive elements sequence is [1, 2, 3, 4]. Therefore its length is 4.

//Example 2:
$nums2 = [0,3,7,2,5,8,4,6,0,1]; //Output: 9

echo longestConsecutive($nums1);

