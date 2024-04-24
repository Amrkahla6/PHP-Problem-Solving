<?php
function containsDuplicate($nums) {
    $countValues = array_count_values($nums);
    foreach ($countValues as  $item)
    {
       if ($item > 1)
       {
           return true;
       }
    }
    return false;
}

$nums1 = [1,2,3,1]; // true
$nums2 = [1,2,3,4]; //false
$nums3 = [1,1,1,3,3,4,3,2,4,2]; //true

echo containsDuplicate($nums1);