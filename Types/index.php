<?php

spl_autoload_register(function ($class_name) {
    require_once ($class_name . ".php");
});

use OperationClasses\IntegerOperation;
use OperationClasses\StringOperation;

$firstVariable = 1;
$secondVariable = 2;

$intClass = new IntegerOperation();
$stringClass = new StringOperation();

echo $intClass->add($firstVariable, $secondVariable) . '</br>';
echo $stringClass->add($firstVariable, $secondVariable);
