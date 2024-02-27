<?php

/**
 * @param Integer $numRows
 * @return Integer[][]
 */
function generate($numRows) {
    $rows = [];
    for($i = 0; $i < $numRows; $i++) {
        for($j = 0; $j <= $i; $j++) {
            $rows[$i][$j] = ($j == 0 || $j == $i) ? 1 : ($rows[$i - 1][$j - 1] + $rows[$i - 1][$j]);
        }
    }

    return $rows;
}

$numRows1 = 5; //Output: [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]]

$numRows2 = 1; //Output: [[1]]

print_r(generate($numRows1));
