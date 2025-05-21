<h2>Mes rendez-vous</h2>

<?php if (empty($liste)): ?>
  <p>Aucun rendez-vous trouvé.</p>
<?php else: ?>
  <table>
    <thead>
      <tr>
        <th>ID Médecin</th>
        <th>Date du rendez-vous</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($liste as $rdv): ?>
        <tr>
          <td><?= htmlspecialchars($rdv['id_medecin']) ?></td>
          <td><?= htmlspecialchars($rdv['date_rdv']) ?></td>
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
  background-color: #e0f2fe; /* bleu clair */
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

thead tr {
  background-color: #0284c7; /* bleu */
  color: white;
  text-align: left;
  font-weight: 600;
}

th, td {
  padding: 14px 18px;
  border-bottom: 1px solid #bae6fd;
}

tbody tr:hover {
  background-color: #dbeafe; /* bleu plus clair */
  transition: background-color 0.3s ease;
}


</style>