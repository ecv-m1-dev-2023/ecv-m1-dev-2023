<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/connect_database.php");

$filePath = $_FILES['article_img']['tmp_name'];
$fileName = $_FILES['article_img']['name'];
$newFileName = "/images/" . $fileName;

if (isset($filePath)) {
  move_uploaded_file($filePath, "$root" . $newFileName);
}

$request = load_script( $root . "/scripts/article/add.sql");
$result = $request->execute([
  'title' => $_POST['title'],
  'date' => date('d/m/Y'),
  'author' => $_POST['author'],
  'img_url' => $newFileName,
  'content' => $_POST['content'],
]);

header('Location: /index.php');
