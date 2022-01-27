<?php

namespace Fakhry\Informatika\Karyawan\TernateAwesome\Config;

use PDO;

class Database
{
    static function getConnection(): PDO
    {
        $host = "127.0.0.1";
        $port = 3306;
        $database = "ternateawesome";
        $username = "root";
        $password = "root";

        return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    }
}