<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/connect_database.php");

// handle image upload
$filePath = $_FILES['article_img']['tmp_name'];
$fileName = $_FILES['article_img']['name'];
$newFileName = "/images/" . $fileName;
if (isset($filePath)) {
  move_uploaded_file($filePath, "$root" . $newFileName);
}

// add article into database
$request = load_script( $root . "/scripts/article/add.sql");

$result = $request->execute([
  'title' => $_POST['title'],
  'date' => date('Y-m-d'),
  'author' => $_POST['author'],
  'img_url' => $newFileName,
  'content' => $_POST['content'],
]);

header('Location: /index.php');
