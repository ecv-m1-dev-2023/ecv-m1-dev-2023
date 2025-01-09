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
$request->bindParam('title', $_POST['title']);

$result = $request->execute([
  'title' => $_POST['title'],
  'date' => date('Y-m-d'),
  'author' => $_POST['author'],
  'img_url' => $newFileName,
  'content' => $_POST['content'],
]);

echo '<pre>';
$request->debugDumpParams();
echo '</pre>';

//header('Location: /index.php');
