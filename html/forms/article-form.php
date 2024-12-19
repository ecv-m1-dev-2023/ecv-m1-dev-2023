<form action="/handlers/add.php" method="POST" class="form">
  <h3>Ajouter un article </h3>
  <label for="title"> Titre</label>
  <input type="text" name="title">
  <label for="author"> Auteur</label>
  <input type="text" name="author">
  <label for="image"> Image</label>
  <input type="file" name="image">
  <label for="content"> Contenu</label>
  <textarea name="content"></textarea>
  <input type="submit" value="Enregistrer" />
</form>
