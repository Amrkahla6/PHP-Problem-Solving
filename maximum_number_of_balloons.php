<?php

/**
 * @param String $text
 * @return Integer
 */
function maxNumberOfBalloons($text) {

    $text = str_split($text);

    $balloons = [];

    foreach ($text as $item)
    {
        if (array_key_exists($item,$balloons))
        {
            $balloons[$item] += 1;
        }else{
            $balloons[$item] = 1;
        }
    }

    $balloon = [
        'b' => 0,
        'a' => 0,
        'l' => 0,
        'o' => 0,
        'n' => 0
    ];

    foreach ($balloons as $key => $value)
    {
        if ($key == 'b' || $key == 'a' || $key == 'l' || $key == 'o' || $key == 'n')
        {
            $balloon[$key] = $value;
        }
    }


    $balloon['l'] = floor($balloon['l'] / 2);
    $balloon['o'] = floor($balloon['o'] / 2);

    return min($balloon['b'], $balloon['a'], $balloon['l'], $balloon['o'], $balloon['n']);

}

$text1 = "nlaebolko";        //Output:1

$text2 = "loonbalxballpoon"; //Output: 2

$text3 = "leetcode";           //Output: 0

echo maxNumberOfBalloons($text1);

