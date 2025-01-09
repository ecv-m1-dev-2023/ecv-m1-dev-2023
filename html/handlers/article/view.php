<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database.php");
include_once("$root/utils.php");

function view_article($id)
{
  global $root;
  $bdd = connect_server('fake_reddit');
  $request = load_script($bdd, $root . "/scripts/article/view.sql");
  $request->execute(['id' => $id]);

  return $request->fetch(PDO::FETCH_ASSOC);
}
