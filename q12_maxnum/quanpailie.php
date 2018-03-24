<?php
/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2018/3/23
 * Time: 17:31
 *
 * 未完成
 */

function gen9($n,$prevNum)
{

    $tmp = $n;

    $i = 0;
    while ($i <= 9) {


        $i++;
//        $prevNum .= $i;
        $prevNum = substr_replace($prevNum,$i,-1,1);
        echo $prevNum;
        while (--$n) {
            gen9($n,$prevNum);
        }
//        if ($n == 0) {
//            echo PHP_EOL;
////            $prevNum = "";
//        }
//        echo PHP_EOL;
        echo PHP_EOL;
//        $prevNum = " ";
//        $prevNum = "";
        $n = $tmp;
    }


}

//cn(2);
gen9(5," ");