<?php

namespace OperationClasses;

require_once ('Operation.php');

class IntegerOperation implements Operation
{
    //TODO Write concatenation function
    function add($a, $b)
    {
        return $a + $b;
    }
}