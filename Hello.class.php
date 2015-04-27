<?php

/**
 * loC Example
 *
 * @author limit
 */

interface Hello {
    public function sayHello();
}

class EnHello implements Hello
{
    private $msg;

    function getMsg()
    {
        return $this->msg;
    }


    function setMsg($v)
    {
        $this->msg = $v;
    }


    function sayHello()
    {
        echo "English Version: " . $this->msg;
    }
}

class CnHello implements Hello
{
    private $msg;

    function getMsg()
    {
        return $this->msg;
    }


    function setMsg($v)
    {
        $this->msg = $v;
    }


    function sayHello()
    {
        echo "中文版: " . $this->msg;
    }
}

