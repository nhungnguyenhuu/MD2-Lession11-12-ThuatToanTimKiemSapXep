<?php
function selectionSort($arr){
    for($i= 0; $i<count($arr); $i++){
        $min = $i;
        for ($j = $i+1; $j<count($arr); $j++){
            if($arr[$j]<$arr[$min]){
                $min = $j;
            }
        }
        $arr = swapPositions($arr, $i, $min);
    }
    return $arr;
}

function swapPositions($data, $left, $right)
{
    $tem = $data[$right];
    $data[$right] = $data[$left];
    $data[$left]= $tem;
    return $data;
}
$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
var_dump(selectionSort($arr));