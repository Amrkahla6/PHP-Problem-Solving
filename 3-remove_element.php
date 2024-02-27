<?php

/**
 * @param Integer[] $nums
 * @param Integer $val
 * @return Integer
 */
function removeElement(&$nums, $val) {
    foreach ($nums as $key => $item)
    {
        if ($item == $val)
        {
            unset($nums[$key]);
        }
    }

    return count($nums);
}

 $nums1 = [3,2,2,3];
 $val1 = 3; //Output: 2, nums = [2,2,_,_]

 $nums2 = [0,1,2,2,3,0,4,2];
 $val2 = 2; //Output: 5, nums = [0,1,4,0,3,_,_,_]

print_r(removeElement($nums2,$val2));
