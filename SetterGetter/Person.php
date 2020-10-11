<?php


class Person
{
    private $params = array();

    public function __set($name, $value)
    {
        $this->params[$name] = $value;
    }

    public function __get($name) {
        return $this->params[$name];
    }
}