<?php
/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2018/3/22
 * Time: 19:49
 */

//顺序查找
function generalSearch($arr)
{

    $i = 0;
    $min = $arr[$i];

    while ($i++) {
        if (isset($arr[$i])) {
            if ($min > $arr[$i]) {
                $min = $arr[$i];
            }
        } else {
            return $min;
        }
    }
}

function binarySearch(&$arr, $s, $e)
{

//    $mid = floor(($s + $e) / 2);
//
//    if ($arr[$s] == $arr[$e] && $arr[$s] == $arr[$mid]) {
//        return generalSearch($arr);
//    }
//
//    if ($arr[$mid] > $arr[$s]) {
//        binarySearch($arr, $s, $mid);
//    }else if($arr[$mid] > $arr[$e]){
//        binarySearch($arr, $mid, $e);
//    }
}