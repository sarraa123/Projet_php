<?php
require_once __DIR__ . '/Database.php';

class Client {
    
    private $pdo;
    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function getClientById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM clients WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateProfil($id, $nom, $email, $telephone, $adresse) {
        $stmt = $this->pdo->prepare("UPDATE clients SET nom=?, email=?, telephone=?, adresse=? WHERE id=?");
        return $stmt->execute([$nom, $email, $telephone, $adresse, $id]);
    }
}
