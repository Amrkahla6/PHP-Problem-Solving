<?php


/**
 * @param Integer[] $flowerbed
 * @param Integer $n
 * @return Boolean
 */
function canPlaceFlowers($flowerbed, $n) {

    $count = 0;

    for ($i=0; $i < count($flowerbed); $i++)
    {
      if ($flowerbed[$i] !=1  && isset($flowerbed[$i-1]) && $flowerbed[$i-1] !=1 && isset($flowerbed[$i+1]) && $flowerbed[$i+1] != 1)
      {
          $flowerbed[$i] = 1;
          $count ++;
      }
        //[0,0,1,0,0]
      if ($flowerbed[$i] !=1 && $i == 0 && $flowerbed[$i+1] != 1 || $flowerbed[$i] !=1 && $i == count($flowerbed) -1 && $flowerbed[$i-1] != 1)
      {
          $flowerbed[$i] = 1;
          $count ++;
      }
    }

    return $count >= $n  ? 'true' : 'false';
}


//Example 1:
$flowerbed1 = [1,0,0,0,1];
$n1 = 1; //Output: true


//Example 2:
$flowerbed2 = [1,0,0,0,1];
$n2 = 2; //Output: false

//Example 3:
$flowerbed3 = [1,0,0,0,0,1];
$n3 = 2; //Output false

//Example 4:
$flowerbed4 = [0,0,1,0,0];
$n4 = 1; //Output:true

echo canPlaceFlowers($flowerbed4,$n4);
