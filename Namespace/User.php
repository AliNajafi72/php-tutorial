<?php


require_once ('./Database/DatabaseHandler.php');

use Database\DatabaseHandler;

class User
{
    public function getUsers() {
        try {
            $handler = new DatabaseHandler();
            $dbh = $handler->getConnectionHandler();
            foreach($dbh->query('SELECT * from users') as $row) {
                echo "Id: " . $row[0] . " |||||" . " Name: " . $row[1] . '</br>';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}