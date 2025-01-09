<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/connect_database.php");

$request = load_script( $root . "/scripts/article/list.sql");
$request->execute();

$articles = $request->fetchAll();

echo '<pre>';
$request->debugDumpParams();
echo '</pre>';

var_dump($articles);
die();
