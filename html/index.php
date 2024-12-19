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
        <?php include 'parts/article.php'; ?>
      </article>
    <?php endforeach; ?>
    <aside>
      <?php include 'forms/article-form.php'; ?>
    </aside>
  </section>
</body>

</html>
