<?php

/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2018/3/22
 * Time: 18:45
 */
class quene
{
    private $_stack1;
    private $_stack2;

    public function __construct()
    {
        $this->_stack1 = new SplStack();
        $this->_stack2 = new SplStack();
    }

    public function push($data)
    {
        $this->_stack1->push($data);
    }

    public function pop()
    {
        if ($this->_stack2->isEmpty()) {
            while (1) {
                try {
                    $tmp = $this->_stack1->pop();
                } catch (Exception $e) {
                    break;
                }

                $this->_stack2->push($tmp);
            }
        }
        return $this->_stack2->pop();
    }

    public function printAll()
    {
        //从头到尾打印
        while (1) {
            try {
                $tmp = $this->_stack2->pop();
            } catch (Exception $e) {
                break;
            }
            echo $tmp;
        }

        while (1) {
            try {
                $tmp = $this->_stack1->pop();
            } catch (Exception $e) {
                break;
            }

            $this->_stack2->push($tmp);
        }

        while (1) {
            try {
                $tmp = $this->_stack2->pop();
            } catch (Exception $e) {
                break;
            }
            echo $tmp;
        }
    }

}

$q = new quene();
$q->push(1);
$q->push(2);
$q->push(3);
echo $q->pop() . PHP_EOL;
$q->push(4);
$q->push(5);
$q->push(5);
$q->push(5);
$q->push(5);
$q->push(5);
echo $q->pop() . PHP_EOL;
$q->push(5);
$q->push(5);
$q->printAll();