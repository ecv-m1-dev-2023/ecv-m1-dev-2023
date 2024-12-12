<html lang="fr">

<head>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <?php
  include_once("./data.php");
  ?>
  <section>
    <?php foreach ($articles as $article): ?>
      <article>
        <a href="/article.php?article=<?= $article["id"] ?>">
          <h3 class="title"><?= $article["title"] ?></h3>
          <div class="minia">
            <img src="<?= $article["img"] ?>" alt="<?= $article["title"] ?>" class="thumbnail">
            <div>
              <p><?= $article["author"] . ", " . $article["date"] ?></p>
              <p><?= "Nombre de commentaires : " . count($article["comments"]) ?></p>
            </div>
          </div>
        </a>
      </article>
    <?php endforeach; ?>
    <aside>
      <form action="add.php" method="POST" class="form">
        <h3>Ajouter un article</h3>
        <label for="title">Titre</label>
        <input type="text" name="title">
        <label for="author">Auteur</label>
        <input type="text" name="author">
        <label for="image">Image</label>
        <input type="file" name="image">
        <label for="content">Contenu</label>
        <textarea name="content"></textarea>
        <input type="submit" value="Enregistrer" />
      </form>
    </aside>
  </section>
</body>

</html>