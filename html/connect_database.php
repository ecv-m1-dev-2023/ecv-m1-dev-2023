<?php

$dsn = "mysql:host=db;charset=utf8";
$bdd = new PDO($dsn, "root", "password");

function load_script($filepath)
{
  global $bdd;
  $script = file_get_contents($filepath);
  return $bdd->prepare($script);
}
