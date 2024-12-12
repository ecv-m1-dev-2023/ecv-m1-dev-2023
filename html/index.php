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
    </aside>
  </section>
</body>

</html>