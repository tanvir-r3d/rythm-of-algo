<?php

function selectionSort($arr, $len)
{
    for ($low = 0; $low < $len; $low++) {
        for ($j = $low + 1; $j < $len; $j++) {
            if ($arr[$low] > $arr[$j]) {
                $temp = $arr[$low];
                $arr[$low] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

$arr = [33, 12, 15, 11, 44, 55, 27];

print_r(selectionSort($arr, count($arr)));
