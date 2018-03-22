<?php
/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2018/3/22
 * Time: 15:26
 */
include "linkList.php";
use linkList\linkList as lklist;

$t = new lklist();
for ($i = 0; $i < 10; $i++) {
    $t->add($i);
}

//var_dump($t);

//链表逆序输出
$t->reverse($t->_firstNode);

