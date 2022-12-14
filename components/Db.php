<?php

class Db
{

    public static function getConnection()
    {
        $paramsPath = __DIR__."/../config/db_params.php";
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        // Задаем кодировку
        $db->exec("set names utf8");

        return $db;
    }

}
