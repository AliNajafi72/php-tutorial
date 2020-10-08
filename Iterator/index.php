<?php

require_once ("./DoubleJumpIterator.php");

$arr = [1, 2, 3, 4, 5, 6];

$doubleJumpIterator = new DoubleJumpIterator($arr);

foreach ($doubleJumpIterator as $item) {
    echo $item;
}