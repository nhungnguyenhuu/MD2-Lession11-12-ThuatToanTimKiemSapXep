<?php
function sortArr($arr, $boolean)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < (count($arr) - $i - 1); $j++) {
            if($boolean== true){
                if ($arr[$j] < $arr[$j + 1]) {
                    $tem = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $tem;
                }
            }else  if ($arr[$j] > $arr[$j + 1]) {
                $tem = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tem;
            }
        }
    }
    for ($i = 0; $i < count($arr); $i++) {
     echo $arr[$i];
    }
}

$arr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];

echo sortArr($arr, true);
echo "<pre>";
echo sortArr($arr, false);