<?php

$firstName = "Ali";
$nameEcho = function ($lastName) use ($firstName) {
    return $firstName . " " . $lastName;
};
echo $nameEcho("Najafi");
