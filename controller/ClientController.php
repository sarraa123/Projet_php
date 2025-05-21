<?php
require_once __DIR__ . '/../model/Client.php';
require_once __DIR__ . '/../model/Medecin.php';
require_once __DIR__ . '/../model/RendezVous.php';
require_once __DIR__ . '/../model/Ordonnance.php';


class ClientController {
    public function modifierProfil() {
        $client = new Client();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $client->updateProfil($_POST['id'], $_POST['nom'], $_POST['email'], $_POST['telephone'], $_POST['adresse']);
            echo "<script>alert('Profil modifié');</script>";
        }
        $donnees = $client->getClientById($_GET['id']);
        include __DIR__ . '/../view/modifier_profil.php';
    }

    public function listeMedecins() {
        $medecin = new Medecin();
        $resultat = isset($_POST['filtre']) ? $medecin->filter($_POST['filtre']) : $medecin->getAll();
        include __DIR__ . '/../view/liste_medecins.php';
    }

public function prendreRdv() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['patient_nom'];
            $prenom = $_POST['patient_prenom'];
            $id_medecin = $_POST['id_medecin'];
            $date_heure = $_POST['date_heure'];

            // Gestion de l'upload de fichier
            $documents = '';
            if (isset($_FILES['documents']) && $_FILES['documents']['error'] === UPLOAD_ERR_OK) {
                $targetDir = __DIR__ . '/../uploads/';
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }
                $fileName = basename($_FILES['documents']['name']);
                $targetFilePath = $targetDir . $fileName;
                move_uploaded_file($_FILES['documents']['tmp_name'], $targetFilePath);
                $documents = $fileName;
            }


            $rdv = new RendezVous();
            $rdv->ajouter($nom, $prenom, $documents, $id_medecin, $date_heure);
            echo "<p>Rendez-vous enregistré avec succès.</p>";
        }
        include __DIR__ . '/../view/prendre_rdv.php';
    }

    public function mesRdv() {
        $rdv = new RendezVous();
        $liste = $rdv->getByClient($_GET['id_client']);
        include __DIR__ . '/../view/mes_rdv.php';
    }

    public function mesOrdonnances() {
        $ord = new Ordonnance();
        $liste = $ord->getByClient($_GET['id_client']);
        include __DIR__ . '/../view/mes_ordonnances.php';
    }
}
