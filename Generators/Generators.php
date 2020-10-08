<?php


class Generators
{
    public function getFruits()
    {
        yield "Apple";
        yield "Orange";
        yield "Pine Apple";
    }
}

$generators = new Generators();
$fruits = $generators->getFruits();
foreach ($fruits as $fruit) {
    echo $fruit . '</br>';
}