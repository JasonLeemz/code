<?php
/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2018/3/22
 * Time: 19:19
 */

function swap(&$a, &$b)
{
    $tmp = $b;
    $b = $a;
    $a = $tmp;
}

function quickSort(&$arr, $s, $e)
{

    if ($s >= $e) {
        return;
    }

    $tmpS = $s;
    $tmpE = $e;

    while (1) {
        if ($s >= $e) {
            break;
        }

        while (1) {
            if ($s >= $e) {
                break;
            }
            if ($arr[$s] > $arr[$e]) {
                swap($arr[$s], $arr[$e]);
                $s++;
                break;
            }
            $e--;
        }

        while (1) {
            if ($s >= $e) {
                break;
            }
            if ($arr[$s] > $arr[$e]) {
                swap($arr[$s], $arr[$e]);
                $e--;
                break;
            }
            $s++;
        }
    }


    quickSort($arr, $tmpS, $s - 1);
    quickSort($arr, $s + 1, $tmpE);
}

//$arr = [5, 6, 3, 9, 0, 1, 7];
$arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];

quickSort($arr, 0, count($arr) - 1);
var_dump($arr);