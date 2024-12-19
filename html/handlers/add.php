<?php

session_start();

$_SESSION['articles'] = $_SESSION['articles'] ?? [];
$articles = $_SESSION['articles']; // safe handler

$articles[] = [
    'id' => uniqid(),
    'title' => $_POST['title'],
    'date' => date('d/m/Y'),
    'author' => $_POST['author'],
    'img' => "https://www.assuropoil.fr/wp-content/uploads/2023/07/avoir-un-chat-sante.jpg",
    'content' => $_POST['content'],
    'comments' => []
];

$_SESSION['articles'] = $articles; // save
header('Location: /index.php');
