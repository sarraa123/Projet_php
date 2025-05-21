<h2>Modifier mon profil</h2>
<form method="post">
  <input type="hidden" name="id" value="<?= $donnees['id'] ?>">
  Nom: <input type="text" name="nom" value="<?= $donnees['nom'] ?>"><br>
  Email: <input type="email" name="email" value="<?= $donnees['email'] ?>"><br>
  Téléphone: <input type="text" name="telephone" value="<?= $donnees['telephone'] ?>"><br>
  Adresse: <input type="text" name="adresse" value="<?= $donnees['adresse'] ?>"><br>
  <button type="submit">Modifier</button>
</form>
