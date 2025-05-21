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

    public function ajouter($nom, $prenom, $documents, $id_medecin, $date_heure) {
            $stmt = $this->pdo->prepare("
                INSERT INTO rendezvous (patient_nom, patient_prenom, documents, id_medecin, date_heure) 
                VALUES (?, ?, ?, ?, ?)
            ");
            return $stmt->execute([$nom, $prenom, $documents, $id_medecin, $date_heure]);
        }

    public function supprimer($id) {
        $stmt = $this->pdo->prepare("DELETE FROM rendezvous WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
