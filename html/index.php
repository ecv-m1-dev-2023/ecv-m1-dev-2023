<html lang="fr">

<head>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <?php
  $articles = [
    [
      'title' => "Les chats c'est cool",
      'date' => "3 days ago",
      'author' => "Maxime",
      'img' => "https://www.assuropoil.fr/wp-content/uploads/2023/07/avoir-un-chat-sante.jpg",
      'comments' => "3"
    ],
    [
      'title' => "Les chats c'est toujours cool",
      'date' => "3 days ago",
      'author' => "Maxime",
      'img' => "https://media.istockphoto.com/id/2037610555/fr/photo/big-eyed-naughty-cat-looking-at-the-target-from-behind-the-marble-table.jpg?s=2048x2048&w=is&k=20&c=wMr6s1jkiGfT_I4kseMJ2N_EYjlbhGUaQwPBlyQwT9k=",
      'comments' => "3"
    ],
    [
      'title' => "Parfois les chats c'est pas cool",
      'date' => "3 days ago",
      'author' => "Maxime",
      'img' => "https://images.unsplash.com/photo-1511045599015-0f84d16a0248?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwcm9maWxlLXBhZ2V8M3x8fGVufDB8fHx8fA%3D%3D",
      'comments' => "3"
    ],
    [
      'title' => "Je suis cool",
      'date' => "3 days ago",
      'author' => "Maxime",
      'img' => "https://plus.unsplash.com/premium_photo-1733925397050-82452ac260db?q=80&w=3870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
      'comments' => "3"
    ]
  ];
  ?>
  <section>
    <?php foreach ($articles as $article): ?>
      <article>
        <img class="thumbimage" src="<?= $article["img"] ?>" />
        <p class="articletitle">
          <?= $article["title"] ?><br />
          <?= $article["author"] ?> - <?= $article["date"] ?>

        </p>
      </article>
    <?php endforeach; ?>
    <aside>
    </aside>
  </section>
</body>

</html>