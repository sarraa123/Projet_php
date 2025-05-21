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
        $rdv = new RendezVous();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $rdv->ajouter($_POST['id_client'], $_POST['id_medecin'], $_POST['date_rdv']);
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
