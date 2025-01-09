<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database.php");

function list_articles()
{
  global $root;
  $bdd = connect_server('fake_reddit');
  $request = load_script($bdd, $root . "/scripts/article/list.sql");
  $request->execute();

  return $request->fetchAll(PDO::FETCH_ASSOC);
}


