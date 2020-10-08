<?php

namespace OperationClasses;

require_once ('Operation.php');

class StringOperation implements Operation
{

    function add($a, $b)
    {
        return $a . $b;
    }
}