<?php

$handler = fopen("./img/icon.png", "r");

$imageBinary = fread($handler, filesize('./img/icon.png'));

$encodedIcon = base64_encode($imageBinary) . PHP_EOL;

echo $encodedIcon;

$textFileHandler = fopen("./img/text.txt", "a");

fwrite($textFileHandler, $encodedIcon);

