<?php

namespace Database;

use PDO;
use PDOException;

class DatabaseHandler
{
    public function getConnectionHandler()
    {

        return new PDO('mysql:host=127.0.0.1:3306;dbname=maktab39',
            "root",
            "#####");
    }
}