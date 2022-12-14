<?php


class DateBaseConnect
{

    public static function getConnection()
    {
        $paramsPath = __DIR__ . "/../config/datebase_params.php";
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec("set names utf8");

        return $db;
    }

}
