<main class="main">
  <h2>Mes ordonnances</h2>
  <ul class="ordonnances-list">
    <?php if (!empty($ordonnances) && is_array($ordonnances)): ?>
      <?php foreach ($ordonnances as $ordonnance): ?>
        <?php 
          $id = isset($ordonnance['id']) ? $ordonnance['id'] : 'Inconnu';
          $contenu = isset($ordonnance['contenu']) ? $ordonnance['contenu'] : 'Non spécifié';
          $date = isset($ordonnance['date_ordre']) ? $ordonnance['date_ordre'] : 'Non spécifiée';
        ?>
        <li>
          <strong>ID:</strong> <?= htmlspecialchars($id) ?> <br>
          <strong>Contenu:</strong> <?= nl2br(htmlspecialchars($contenu)) ?> <br>
          <strong>Date:</strong> <?= htmlspecialchars($date) ?>
        </li>
      <?php endforeach; ?>
    <?php else: ?>
      <li class="empty-message">Aucune ordonnance trouvée.</li>
    <?php endif; ?>
  </ul>
</main>
<style>
    .main {
  flex: 1;
  padding: 30px;
  box-sizing: border-box;
  overflow-y: auto;
  background-color: white;
  border-radius: 12px;
  margin: 20px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

h2 {
  color: #0c4a6e;
  margin-bottom: 20px;
  font-weight: 700;
}

ul.ordonnances-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

ul.ordonnances-list li {
  padding: 18px 20px;
  border-radius: 12px;
  background-color: #e0f2fe;
  margin-bottom: 16px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.07);
  transition: background-color 0.3s ease;
}

ul.ordonnances-list li:hover {
  background-color: #bae6fd;
}

ul.ordonnances-list li strong {
  color: #0c4a6e;
}

.empty-message {
  color: #0c4a6e;
  font-weight: 600;
}

</style>