<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Patient</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      min-height: 100vh;
      background-color: #e0f2fe;
    }

    .sidebar {
      width: 220px;
      background-color: white;
      color: #0c4a6e;
      padding: 20px;
      flex-shrink: 0;
      height: 100vh;
      box-sizing: border-box;
      box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
      border-radius: 0 12px 12px 0;
      position: fixed;
      top: 60px;
      left: 0;
      overflow-y: auto;
    }

    .sidebar h2 {
      color: #0c4a6e;
      margin-bottom: 30px;
      font-weight: 700;
    }

    .sidebar a {
      color: #0c4a6e;
      text-decoration: none;
      display: block;
      margin: 12px 0;
      padding: 10px 15px;
      border-radius: 8px;
      transition: background 0.3s;
      font-size: 1rem;
      font-weight: 600;
    }

    .sidebar a:hover {
      background-color: #bae6fd;
    }

    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 60px;
      background: white;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      justify-content: flex-end;
      padding: 0 30px;
      z-index: 100;
      font-size: 1.2rem;
    }

    .navbar .icon-btn {
      position: relative;
      margin-left: 25px;
      cursor: pointer;
      color: #0c4a6e;
      transition: color 0.3s;
    }

    .navbar .icon-btn:hover {
      color: #0369a1;
    }

    .badge {
      position: absolute;
      top: -6px;
      right: -10px;
      background-color: #ef4444;
      color: white;
      border-radius: 50%;
      padding: 2px 7px;
      font-size: 0.75rem;
      font-weight: bold;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
    }

    .main-content {
      margin-left: 220px;
      margin-top: 60px;
      padding: 30px;
      height: calc(100vh - 60px);
      overflow-y: auto;
      background-color: #f8fafc;
      flex-grow: 1;
    }

    .main {
      background-color: white;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
  <div class="icon-btn" title="Messages">💬 <span class="badge">3</span></div>
  <div class="icon-btn" title="Notifications">🔔 <span class="badge">2</span></div>
</div>

<!-- Sidebar -->
<div class="sidebar">
  <h2>👩‍⚕️ Patient</h2>
  <a href="index.php">🏠 Accueil</a>
  <a href="?action=listeMedecins">🩺 Voir les médecins</a>
  <a href="?action=prendreRdv">📅 Prendre un rendez-vous</a>
  <a href="?action=mesRdv&id_client=1">📖 Mes RDV</a>
  <a href="?action=mesOrdonnances&id_client=1">💊 Mes Ordonnances</a>
  <a href="?action=modifierProfil&id=1">👤 Modifier mon profil</a>
</div>

<!-- Main content -->
<div class="main-content">
  <div class="main">
    <?php
      if (isset($_GET['action'])) {
          require_once 'controller/ClientController.php';
          $ctrl = new ClientController();
          switch ($_GET['action']) {
              case 'modifierProfil': $ctrl->modifierProfil(); break;
              case 'listeMedecins': $ctrl->listeMedecins(); break;
              case 'prendreRdv': $ctrl->prendreRdv(); break;
              case 'mesRdv': $ctrl->mesRdv(); break;
              case 'mesOrdonnances': $ctrl->mesOrdonnances(); break;
              default: echo "<h2>Page non trouvée</h2>"; break;
          }
      } else {
          echo "<h1>Bienvenue sur votre espace patient 🧑‍⚕️</h1>
          <p>Utilisez le menu à gauche pour naviguer entre vos fonctionnalités.</p>";
      }
    ?>
  </div>
</div>

</body>
</html>

<?php
ob_end_flush();
