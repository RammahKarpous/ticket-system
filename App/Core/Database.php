<?php

namespace App\Core;

class Database
{
    public static string $db_host = '127.0.0.1';
    public static string $db_name = 'ticket_system';
    public static string $db_username = 'root';
    public static string $db_password = '';
    public static string $db_port = '3306';

    public function __construct(
        string $host = '',
        string $name = '',
        string $username = '',
        string $password = '',
        string $port = ''
    ) {
        self::$db_host = $host ?: env('DB_HOST', self::$db_host);
        self::$db_name = $name ?: env('DB_NAME', self::$db_name);
        self::$db_username = $username ?: env('DB_USERNAME', self::$db_username);
        self::$db_password = $password ?: env('DB_PASSWORD', self::$db_password);
        self::$db_port = $port ?: env('DB_PORT', self::$db_port);
    }

    public static function connect(): \PDO
    {
        $dsn = "mysql:host=" . self::$db_host . ";port=" . self::$db_port . ";dbname=" . self::$db_name . ";charset=utf8mb4";

        try {
            return new \PDO($dsn, self::$db_username, self::$db_password);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}