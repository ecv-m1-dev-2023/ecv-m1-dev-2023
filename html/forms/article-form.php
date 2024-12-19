<form action="/handlers/add.php" method="POST" class="form" enctype="multipart/form-data">
  <h3>Ajouter un article </h3>
  <label for="title"> Titre</label>
  <input type="text" name="title">
  <label for="author"> Auteur</label>
  <input type="text" name="author">
  <label for="article_img"> Image</label>
  <input type="file" name="article_img">
  <label for="content"> Contenu</label>
  <textarea name="content"></textarea>
  <input type="submit" value="Enregistrer" />
</form>