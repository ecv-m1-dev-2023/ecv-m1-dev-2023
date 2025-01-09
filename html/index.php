<html lang="fr">

<head>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/handlers/article/list.php");
$articles = list_articles();
?>
<section>
  <?php if ($articles) : ?>
    <?php foreach ($articles as $article): ?>
      <article>
        <?php include 'parts/article.php'; ?>
      </article>
    <?php endforeach; ?>
  <?php else : ?>
    <h3>Oops! Aucun article. :)</h3>
  <?php endif; ?>
  <aside>
    <?php include 'forms/article-form.php'; ?>
  </aside>
</section>
</body>

</html>
