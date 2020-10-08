<?php


class RIISample extends RecursiveIteratorIterator
{
    private $htmlStructure = '';

    function __construct(array $arr)
    {
        $rai = new RecursiveArrayIterator($arr);
        parent::__construct($rai, RecursiveIteratorIterator::SELF_FIRST, 0);
    }

    public function beginIteration()
    {
        $this->htmlStructure = $this->htmlStructure . '<ul>';
    }

    public function nextElement()
    {
        $this->htmlStructure = $this->htmlStructure . '<li>' . $this->current() . '</li>';
    }


    function endIteration()
    {
        $this->htmlStructure = $this->htmlStructure . '</ul>';
    }

    public function getStructure() {
        return $this->htmlStructure;
    }


}