<?php
/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2018/3/25
 * Time: 14:42
 *
 * 未处理边界
 */

$dlist = new SplDoublyLinkedList();

$i = 11;
while (--$i > 0) {
    $dlist->push($i);
}
//var_dump($dlist);

function getn($list, $n)
{
    $q = new SplQueue();
    $i = 0;
    $list->rewind();
//    var_dump($t);
    while ($list->valid()) {
        $t = $list->current();

        if ($i < $n) {
            $q->push($t);
            $i++;
        } else {
            $q->shift();
            $q->push($t);
        }
        $list->next();
    }
//var_dump($q);
    return $q->shift();
}

echo getn($dlist, 2);