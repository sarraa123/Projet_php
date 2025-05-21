<h2>Prendre rendez-vous</h2>
<form method="post" enctype="multipart/form-data" class="rdv-form">
    <label for="patient_nom">Nom :</label>
    <input type="text" id="patient_nom" name="patient_nom" required>

    <label for="patient_prenom">Prénom :</label>
    <input type="text" id="patient_prenom" name="patient_prenom" required>

    <label for="id_medecin">Médecin (ID) :</label>
    <input type="number" id="id_medecin" name="id_medecin" required>

    <label for="date_heure">Date et Heure :</label>
    <input type="datetime-local" id="date_heure" name="date_heure" required>

    <label for="documents">Documents (optionnels) :</label>
    <input type="file" id="documents" name="documents">

    <button type="submit">Valider</button>
</form>

<style>
  /* Formulaire prise de rendez-vous - design conforme au style global */

  h2 {
    color: #0c4a6e;
    font-weight: 700;
    margin-bottom: 20px;
    font-family: 'Segoe UI', sans-serif;
  }

  form.rdv-form {
    background-color: white;
    padding: 25px;
    max-width: 420px;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', sans-serif;
  }

  form.rdv-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #0c4a6e;
    font-size: 1rem;
  }

  form.rdv-form input[type="text"],
  form.rdv-form input[type="number"],
  form.rdv-form input[type="datetime-local"],
  form.rdv-form input[type="file"] {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 18px;
    border: 1.5px solid #bae6fd;
    border-radius: 8px;
    font-size: 1rem;
    color: #0c4a6e;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
  }

  form.rdv-form input[type="text"]:focus,
  form.rdv-form input[type="number"]:focus,
  form.rdv-form input[type="datetime-local"]:focus,
  form.rdv-form input[type="file"]:focus {
    outline: none;
    border-color: #0284c7;
    box-shadow: 0 0 6px #bae6fd;
  }

  form.rdv-form button {
    width: 100%;
    background-color: #2563eb;
    color: white;
    border: none;
    padding: 12px 0;
    font-size: 1.1rem;
    font-weight: 700;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  form.rdv-form button:hover {
    background-color: #1d4ed8;
  }
</style>
