<?php
/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2018/3/23
 * Time: 16:05
 *
 *
 * 未完成
 */


function print2maxnum($n)
{
    $arr = array_fill(0, $n, 0);
//    var_dump($arr);exit;
    $i = $n - 1;

    $x = $n;
    $m = "";
    while ($x--) {
        $m .= "9";
    }

    $y = 1;
    while ($y++ != $m) {
        $arr[$n - 1] = $arr[$n - 1] + 1;
        if ($arr[$n - 1] > 9) {
            $tmp = 1;
            $arr[$n - 1] = $arr[$n - 1] % 10;
        } else {
            $tmp = 0;
        }

        $j = $i - 1;
        for (; $j >= 0; $j--) {
            $arr[$j] = $arr[$j] + $tmp;
            if ($arr[$j] > 9) {
                $tmp = 1;
                $arr[$j] = $arr[$j] % 10;
            }
        }

        printInt($arr);
    }
}

function printInt($arr)
{
    $len = count($arr);
//    $flag = 0;
//    for ($i = 0; $i < $len; $i++) {
//        if ($arr[$i] != 0) {
//            $flag = $i;
//        }
//    }
//
//    while ($flag < $len) {
//        echo $arr[$flag];
//        $flag++;
//    }


    $i = 0;
    while($i < $len){
        echo $arr[$i];
        $i++;
    }
    echo PHP_EOL;
}

print2maxnum(2);