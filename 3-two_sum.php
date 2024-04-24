<?php

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {

    $map = [];

   for ($i=0; $i < count($nums); $i++)
   {
       $difference = $target - $nums[$i];

       if (isset($map[$difference]))
       {
           return [$map[$difference], $i];
       }
       $map[$nums[$i]] = $i;
   }

}

$nums1 = [2,7,11,15]; //[0,1]
$target1 = 9;

$nums2   = [3,2,4]; //[1,2]
$target2 = 6;

$nums3 = [3,3]; //[0,1]
$target3 = 6;

print_r(twoSum($nums3,$target3));