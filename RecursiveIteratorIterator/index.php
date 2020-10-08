<?php

require_once ("./RIISample.php");

$items = [1, 2, 3, 4];

$riiSample = new RIISample($items);

foreach ($riiSample as $item) {

}

echo $riiSample->getStructure();
