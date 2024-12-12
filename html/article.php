<html lang="fr">

<head>
  <link href="style.css" rel="stylesheet"/>
</head>

<body>
  <?php
    $article = [
      'title' => "Les chats c'est cool",
      'date' => "3 days ago",
      'author' => "Maxime",
      'img' => "https://www.assuropoil.fr/wp-content/uploads/2023/07/avoir-un-chat-sante.jpg",
      'desc' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem iure ut placeat eveniet quos nulla provident ducimus totam quod iste repudiandae sequi corrupti quia, est atque rem repellat itaque delectus ab iusto. Inventore, cupiditate magni cum est sit delectus ratione maxime dignissimos eos itaque commodi dolore, harum ad fugit non unde ullam! Placeat, accusantium aliquam ab ea quasi tenetur praesentium mollitia accusamus magni repellat totam quam quos illo iusto ratione sint nostrum ipsa. Eligendi praesentium possimus voluptatem illo quidem! Quibusdam temporibus, mollitia veritatis architecto alias ipsam delectus placeat, quia libero hic quasi exercitationem omnis fuga saepe odit! Aperiam architecto perspiciatis placeat numquam voluptates ullam deserunt quas omnis."
    ];

    $comments = [
      [
        "author" => "Jean",
        "content" => "Super article !",
        "date" => "2 days ago"
      ],
      [
        "author" => "Paul",
        "content" => "J'adore les chats !",
        "date" => "3 days ago"
      ],
      [
        "author" => "Jacques",
        "content" => "Moi aussi !",
        "date" => "4 days ago"
      ]
    ];
  ?>
<section>
  <article>
    <h1 class="title"><?= $article["title"] ?></h1>
    <span><time><?= $article["date"] ?></time></span>
    <span><?= $article["author"] ?></span>
    <div class="content">
      <img src="<?= $article["img"] ?>" alt="chat" class="image">
      <p class="description"><?= $article["desc"] ?></p>
    </div>
  </article>
  <aside>
    <?php foreach($comments as $comment) : ?>
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
