<?php

/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function nextGreaterElement($nums1, $nums2)
{
    $result = [];

    foreach ($nums1 as $item)
    {
        $key     = array_search($item,$nums2);
        $isFound = false;
        if (end($nums2) == $nums2[$key])
        {
            $isFound = -1;
        }else{
            $value = array_slice($nums2,$key);
            foreach ($value as $val)
            {
                if ($val > $item)
                {
                    $isFound = $val;
                    break;
                }
            }
        }

        if ($isFound > $item)
        {
            $result[] = $isFound;
        }else{
            $result[] = -1;
        }
    }

    return $result;
}

//Example 1:

$nums11 = [4,1,2];
$nums21 = [1,3,4,2]; //Output: [-1,3,-1] //key =2

$nums12 = [2,4];
$nums22 = [1,2,3,4]; //Output: [3,-1]

$nums31  = [1,3,5,2,4];
$nums32  = [6,5,4,3,2,1,7]; // [7,7,7,7,7]

print_r(nextGreaterElement($nums31,$nums32));