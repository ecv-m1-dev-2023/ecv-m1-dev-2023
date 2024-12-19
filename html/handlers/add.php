<?php

session_start();

$_SESSION['articles'] = $_SESSION['articles'] ?? [];
$articles = $_SESSION['articles']; // safe handler

$filePath = $_FILES['article_img']['tmp_name'];
$fileName = $_FILES['article_img']['name'];
$newFileName = "/images/" . $fileName;

if (isset($filePath)) {
    move_uploaded_file($filePath, ".." . $newFileName);
}

$articles[] = [
    'id' => uniqid(),
    'title' => $_POST['title'],
    'date' => date('d/m/Y'),
    'author' => $_POST['author'],
    'img' => $newFileName,
    'content' => $_POST['content'],
    'comments' => []
];

$_SESSION['articles'] = $articles; // save
header('Location: /index.php');
