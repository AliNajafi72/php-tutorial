<?php
$email = "AliNajafiTabriz@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL))
    echo "This is correct format of an email!" . '</br>';
else
    echo "Wrong format!" . '</br>';
$username = "AliNajafi";
echo filter_var($username, FILTER_SANITIZE_STRING);