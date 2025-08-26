<?php

namespace App\Models;

use App\Core\Database;

class Model extends Database {

    public static string $table = '';

    public static function all() {
        $stmt = self::connect()->prepare("SELECT * FROM " . static::$table .";");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function setTable($table) {
        static::$table = $table;
    }

    public static function table() {
        return static::table();
    }
}