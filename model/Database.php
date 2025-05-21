<?php
class Database {
    private static $host = 'localhost';
    private static $db_name = 'site_medical';
    private static $username = 'root';
    private static $password = '';

    public static function connect() {
        try {
            $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Erreur connexion DB: " . $e->getMessage());
        }
    }
}
