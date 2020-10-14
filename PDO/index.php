<?php

require_once "./DatabaseConnection.php";

define('SELECT_NAMES', 'SELECT name FROM users WHERE name =:name', true);
define('UPDATE_NAME', 'UPDATE users SET name=:name WHERE name=:fname');

$connection = null;

try {
    $connection = DatabaseConnectionSingleton::getPDOConnectionInstance();
    $stmt = $connection->prepare(SELECT_NAMES);
    $stmt->bindValue(':name', 'Ali Najafi');
    $stmt->execute();
    $row = $stmt->fetch();
    echo "Name: " . $row['name'] . '</br>';
    echo "Successfully connected to database!";
} catch (PDOException $e) {
    echo $e->getTrace();
    echo "Something went wrong!";
}

try {
    $connection->beginTransaction();
    $stmt = $connection->prepare(UPDATE_NAME);
    $stmt->bindValue(':name', 'Mohsen Mokhtari Balastani');
    $stmt->bindValue(':fname', 'Mohsen Mokhtari');
    $stmt->execute();
    $connection->commit();
} catch (PDOException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}


