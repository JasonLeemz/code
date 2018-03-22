<?php

/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2018/3/22
 * Time: 13:22
 */

namespace linkList;

class node
{
    public $data;
    public $next;
}

class linkList
{

    public $linkList;
    public $_firstNode;
    public $_lastNode;

    public function __construct()
    {
        $node = new node();
        $node->data = false;
        $node->next = null;
        $this->_firstNode = &$node;
        $this->_lastNode = &$node;

        $this->linkList->next = &$node;
    }

    public function add($data)
    {

        $node = new node();
        $node->data = $data;
        $node->next = null;

        $this->_lastNode->next = &$node;
        //断开与之前变量地址的关联
        unset($this->_lastNode);
        $this->_lastNode = &$node;
    }

    //倒序输出链表内容
    public function reverse(&$linkNode)
    {

        if ($linkNode->next !== NULL) {
            echo $this->reverse($linkNode->next);
        }
        return $linkNode->data;

    }


}


