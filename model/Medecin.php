<?php
require_once __DIR__ . '/Database.php';

class Medecin {
    private $pdo;
    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM medecins");
        return $stmt->fetchAll();
    }

    public function filter($specialite) {
        $stmt = $this->pdo->prepare("SELECT * FROM medecins WHERE specialite LIKE ?");
        $stmt->execute(['%' . $specialite . '%']);
        return $stmt->fetchAll();
    }
}
