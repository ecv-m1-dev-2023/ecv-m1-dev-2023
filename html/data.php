<?php

session_start();

$articles = $_SESSION['articles'] ?? [];

// Example (to delete later on)
//
// $articles = [
//     [
//         'id' => 32,
//         'title' => "Les chats c'est cool",
//         'date' => "3 days ago",
//         'author' => "Maxime",
//         'img' => "https://www.assuropoil.fr/wp-content/uploads/2023/07/avoir-un-chat-sante.jpg",
//         'comments' => [
//             [
//                 "author" => "Jean",
//                 "content" => "Super article !",
//                 "date" => "2 days ago"
//             ],
//             [
//                 "author" => "Paul",
//                 "content" => "J'adore les chats !",
//                 "date" => "3 days ago"
//             ],
//             [
//                 "author" => "Jacques",
//                 "content" => "Moi aussi !",
//                 "date" => "4 days ago"
//             ]
//         ]
//     ]
// ];
