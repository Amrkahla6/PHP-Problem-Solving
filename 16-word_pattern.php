<?php
/**
 * @param String $pattern
 * @param String $s
 * @return Boolean
 */
function wordPattern($pattern, $s) {

    $arr = explode(' ', $s);
    $map = [];
    $rev = [];

    if(count($arr) != strlen($pattern)) return false;

    for($i = 0; $i < count($arr); $i++){
        if(array_key_exists($pattern[$i], $map)){
            if($map[$pattern[$i]] != $arr[$i]) return false;
        }else{
            $map[$pattern[$i]] = $arr[$i];
        }
      
        if(array_key_exists($arr[$i], $rev)){
            if($rev[$arr[$i]] != $pattern[$i]) return false;
        }else{
            $rev[$arr[$i]] = $pattern[$i];
        }
        print_r($rev);
    }

    return true;
}

//Example 1:
$pattern1 = "abba";
$s1       = "dog cat cat dog"; //Output: true


//Example 2:
$pattern2 = "abba";
$s2       = "dog cat cat fish"; //Output: false

//Example 3:
$pattern3 = "aaaa";
$s3       = "dog cat cat dog"; //Output: false

echo wordPattern($pattern2,$s2);