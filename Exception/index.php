<?php

require_once "./Transportation.php";
require_once "./HeavyWeightException.php";

$transportation = new Transportation();


try {
    $transportation->transport(15);
} catch (HeavyWeightException $e) {
    echo $e->getMessage();
}