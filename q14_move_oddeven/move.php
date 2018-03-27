<?php
/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2018/3/25
 * Time: 14:24
 */

$arr = [1, 2, 4, 5, 3, 4, 6, 9, 7, 1, 0];
function swap(&$arr, $l, $r)
{
    $tmp = $arr[$l];
    $arr[$l] = $arr[$r];
    $arr[$r] = $tmp;
}

function move(&$arr, $l, $r)
{
    while (1) {
        if ($l >= $r) {
            return;
        }

        if ($arr[$l] % 2 == 0) {
            while (1) {
                if ($l >= $r) {
                    return;
                }

                if ($arr[$r] % 2 == 1) {
                    swap($arr, $l, $r);
                    $r--;
                    break;
                } else {
                    $r--;
                }
            }
        } else {
            $l++;
        }
    }
}

move($arr, 0, count($arr) - 1);
var_dump($arr);