<?php


class DoubleJumpIterator implements Iterator
{
    private $position = 0;
    private $arr;

    /**
     * DoubleJumpIterator constructor.
     * @param $arr
     */
    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }


    public function current()
    {
        return $this->arr[$this->position];
    }

    public function next()
    {
        $this->position +=2;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->arr[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

}