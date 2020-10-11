<?php

function handleMissedException(Exception $e) {
    echo "Sorry! Something went wrong! Please try again later.";
    $message = "Fatal error with this message: " . $e->getMessage() . " occurred in file: "
        . $e->getFile() . " on line: " . $e->getLine();
    error_log($message);
}

set_exception_handler('handleMissedException');

throw new Exception('Just for test!');
