<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function majorityElement($nums) {

    $exist = [];

    foreach ($nums as $item)
    {
        if (array_key_exists($item,$exist))
        {
            $exist[$item] +=1 ;
        }else{
            $exist[$item] = 1;
        }

    }

    $max_value = max($exist);

    if ($max_value < count($nums) / 2)
    {
        return 0;
    }
    return array_search($max_value, $exist);
}


//Example 1:
$nums1 = [3,2,3]; //Output: 3

//Example 2:
$nums2 = [2,2,1,1,1,2,2]; //Output: 2

echo majorityElement($nums1);