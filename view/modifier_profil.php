<div class="main">
  <h2>Modifier mon profil</h2>
  <form method="post" style="max-width: 500px; background-color: #e0f2fe; padding: 25px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
    <input type="hidden" name="id" value="<?= $donnees['id'] ?>">

    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #0c4a6e;">Nom:</label>
    <input type="text" name="nom" value="<?= $donnees['nom'] ?>" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #bae6fd; margin-bottom: 16px;">

    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #0c4a6e;">Email:</label>
    <input type="email" name="email" value="<?= $donnees['email'] ?>" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #bae6fd; margin-bottom: 16px;">

    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #0c4a6e;">Téléphone:</label>
    <input type="text" name="telephone" value="<?= $donnees['telephone'] ?>" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #bae6fd; margin-bottom: 16px;">

    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #0c4a6e;">Adresse:</label>
    <input type="text" name="adresse" value="<?= $donnees['adresse'] ?>" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #bae6fd; margin-bottom: 20px;">

    <button type="submit" style="background-color: #2563eb; color: white;">Modifier</button>
  </form>
</div>

