<html lang="fr">

<head>
  <link href="style.css" rel="stylesheet"/>
</head>

<body>
  <?php 
    $articleTitle = "Les chats c'est cool";
    $articleTime = "3 days ago";
    $articleAuthor = "Maxime";
    $articleImageUrl = "https://www.assuropoil.fr/wp-content/uploads/2023/07/avoir-un-chat-sante.jpg";
    $articleDescription = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem iure ut placeat eveniet quos nulla provident ducimus totam quod iste repudiandae sequi corrupti quia, est atque rem repellat itaque delectus ab iusto. Inventore, cupiditate magni cum est sit delectus ratione maxime dignissimos eos itaque commodi dolore, harum ad fugit non unde ullam! Placeat, accusantium aliquam ab ea quasi tenetur praesentium mollitia accusamus magni repellat totam quam quos illo iusto ratione sint nostrum ipsa. Eligendi praesentium possimus voluptatem illo quidem! Quibusdam temporibus, mollitia veritatis architecto alias ipsam delectus placeat, quia libero hic quasi exercitationem omnis fuga saepe odit! Aperiam architecto perspiciatis placeat numquam voluptates ullam deserunt quas omnis. Placeat aperiam eaque possimus ducimus fuga voluptatem iure? A quisquam non rem nobis hic odit. Accusamus deleniti provident porro aspernatur nulla adipisci, quod in nam similique sint. Consequuntur dolor est maxime in mollitia rem quod aliquid facere dolorem! Error assumenda eum quidem, eaque expedita rerum accusantium commodi eius aspernatur nihil doloribus laborum magni. Architecto facilis pariatur aut temporibus corporis ratione magni commodi at eius totam, minus excepturi delectus voluptatum sunt debitis molestiae inventore dolores soluta? Harum, omnis? Sed, necessitatibus molestias, asperiores totam veniam odio voluptatem eaque magnam tempora quos libero rerum tenetur nam";
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
    <h1 class="title"><?= $articleTitle ?></h1>
    <span><time><?= $articleTime ?></time></span>
    <span><?= $articleAuthor ?></span>
    <div class="content">
      <img src="<?= $articleImageUrl ?>" alt="chat" class="image">
      <p class="description"><?= $articleDescription ?></p>
    </div>
  </article>
  <aside>
    <?php foreach($comments as $comment) : ?>
      <div class="comment">
        <p><?= $comment['author'] ?></p>
        <p><?= $comment['content'] ?></p>
        <p><?= $comment['date'] ?></p>
      </div>
    <?php endforeach; ?> 
  </aside>
</section>
</body>

</html>