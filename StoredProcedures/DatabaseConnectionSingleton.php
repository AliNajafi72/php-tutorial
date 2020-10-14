<?php


class DatabaseConnectionSingleton extends PDO
{
    private static $_intance = null;

    private function __construct()
    {

    }

    public static function getPDOConnectionInstance() : PDO
    {
        if (!(self::$_intance instanceof DatabaseConnectionSingleton)) {
            self::$_intance = new PDO(
                'mysql:host=localhost;dbname=maktab39',
                'root',
                'Ali721100'
            );
        }
        return self::$_intance;
    }
}