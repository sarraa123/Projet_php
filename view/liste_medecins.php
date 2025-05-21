<h2>Liste des médecins</h2>

<!-- Formulaire de filtre -->
<form method="post" style="margin-bottom: 20px;">
  <input type="text" name="filtre" placeholder="Spécialité">
  <button type="submit">Filtrer</button>
</form>

<!-- Tableau stylisé -->
<?php if (empty($resultat)): ?>
  <p>Aucun médecin trouvé.</p>
<?php else: ?>
  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Spécialité</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($resultat as $med): ?>
        <tr>
          <td><?= htmlspecialchars($med['nom']) ?></td>
          <td><?= htmlspecialchars($med['specialite']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>

<style>
table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  background-color: #e0f2fe;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

thead tr {
  background-color: #0284c7;
  color: white;
  text-align: left;
  font-weight: 600;
}

th, td {
  padding: 14px 18px;
  border-bottom: 1px solid #bae6fd;
}

tbody tr:hover {
  background-color: #dbeafe;
  transition: background-color 0.3s ease;
}

form input[type="text"] {
  padding: 10px;
  border-radius: 6px;
  border: 1px solid #94a3b8;
  margin-right: 10px;
  font-size: 1rem;
}

form button {
  border: none;
  padding: 10px 16px;
  border-radius: 6px;
  cursor: pointer;
  background-color: #2563eb;
  color: white;
  font-weight: 600;
  transition: background-color 0.3s ease;
}

form button:hover {
  background-color: #1e40af;
}
</style>