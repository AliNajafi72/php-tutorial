<?php

require_once "./DatabaseConnectionSingleton.php";

$dbConnection = DatabaseConnectionSingleton::getPDOConnectionInstance();

$query = 'call get_names("Ali Najafi")';

$stmt = $dbConnection->query($query);

$result = $stmt->fetch();

var_dump($result);