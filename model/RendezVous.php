<?php
require_once __DIR__ . '/Database.php';

class RendezVous {
    private $pdo;
    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function getByClient($id_client) {
        $stmt = $this->pdo->prepare("SELECT * FROM rendezvous WHERE id_client = ?");
        $stmt->execute([$id_client]);
        return $stmt->fetchAll();
    }

    public function ajouter($id_client, $id_medecin, $date_rdv) {
        $stmt = $this->pdo->prepare("INSERT INTO rendezvous(id_client, id_medecin, date_rdv) VALUES (?, ?, ?)");
        return $stmt->execute([$id_client, $id_medecin, $date_rdv]);
    }

    public function supprimer($id) {
        $stmt = $this->pdo->prepare("DELETE FROM rendezvous WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
