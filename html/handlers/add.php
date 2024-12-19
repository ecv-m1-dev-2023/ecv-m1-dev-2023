<?php

include_once("../database.php");

$filePath = $_FILES['article_img']['tmp_name'];
$fileName = $_FILES['article_img']['name'];
$newFileName = "/images/" . $fileName;

if (isset($filePath)) {
    move_uploaded_file($filePath, ".." . $newFileName);
}

$request = "USE fake_reddit; INSERT INTO articles (`title`, date, author, img, content) 
VALUES ({$_POST['title']}, {date('d/m/Y')}, {$_POST['author']}, {$newFileName}, {$_POST['content']} )";

$req = $bdd->prepare($request);
$req->execute();




// session_start();

// $_SESSION['articles'] = $_SESSION['articles'] ?? [];
// $articles = $_SESSION['articles']; // safe handler

// $filePath = $_FILES['article_img']['tmp_name'];
// $fileName = $_FILES['article_img']['name'];
// $newFileName = "/images/" . $fileName;

// if (isset($filePath)) {
//     move_uploaded_file($filePath, ".." . $newFileName);
// }

// $articles[] = [
//     'id' => hexdec(uniqid()),
//     'title' => $_POST['title'],
//     'date' => date('d/m/Y'),
//     'author' => $_POST['author'],
//     'img' => $newFileName,
//     'content' => $_POST['content'],
//     'comments' => []
// ];

// $_SESSION['articles'] = $articles; // save
// header('Location: /index.php');
