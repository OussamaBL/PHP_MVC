<?php

namespace app\connexion;

class connexion
{
    static PDO $pdo;

    public function __construct()
    {
        $serverName = $_ENV["DB_SERVERNAME"];
        $db_name = $_ENV["DB_NAME"];
        $userName = $_ENV["DB_USERNAME"];
        $password = $_ENV["DB_PASSWORD"];

        $dsn = "mysql:host=$serverName;dbname=$db_name;charset=utf8";
        self::$pdo = new PDO($dsn, $userName, $password);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

}