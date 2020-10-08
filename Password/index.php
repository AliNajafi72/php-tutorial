<?php

$password = "#####";
$hashedPassword = password_hash($password,PASSWORD_DEFAULT);
//echo $hashedPassword;
$enteredPassword = "#####";
if (password_verify($enteredPassword, $hashedPassword))
    echo "Right password!";
else
    echo "Wrong password!";
