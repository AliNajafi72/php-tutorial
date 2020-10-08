<?php

try {
    $dbh = new PDO('mysql:host=127.0.0.1:3306;dbname=maktab39', "root", "Ali721100");
    foreach($dbh->query('SELECT * from users') as $row) {
        echo "Id: " . $row[0] . " |||||" . " Name: " . $row[1] . '</br>';
    }
}catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
}




