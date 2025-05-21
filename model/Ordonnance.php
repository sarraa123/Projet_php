<?php
require_once __DIR__ . '/Database.php';

class Ordonnance {
    private $pdo;
    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function getByClient($id_client) {
        $stmt = $this->pdo->prepare("SELECT * FROM ordonnances WHERE id_client = ?");
        $stmt->execute([$id_client]);
        return $stmt->fetchAll();
    }
}
