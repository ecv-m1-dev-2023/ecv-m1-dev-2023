<html lang="fr">

<head>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <?php
  include_once("./data.php");
  include_once("./functions.php");

  $id = $_GET["article"];
  $article = getArticleById($id, $articles);
  $comments = $article["comments"];
  ?>
  <section>
    <article>
      <h1 class="title"><?= $article["title"] ?></h1>
      <span><time><?= $article["date"] ?></time></span>
      <span><?= $article["author"] ?></span>
      <div class="content">
        <img src="<?= $article["img"] ?>" alt="chat" class="image">
        <!-- <p class="description"><?= $article["desc"] ?></p> -->
      </div>
    </article>
    <aside>
      <?php foreach ($comments as $comment) : ?>
        <div class="comment">
          <h3><?= $comment['author'] ?></h3>
          <p><?= $comment['content'] ?></p>
          <p><?= $comment['date'] ?></p>
        </div>
      <?php endforeach; ?>
    </aside>
  </section>
</body>

</html>
