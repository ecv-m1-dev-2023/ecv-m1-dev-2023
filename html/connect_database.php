<?php

$dsn = "mysql:host=db;charset=utf8";
$bdd = new PDO($dsn, "root", "password");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function load_script($filepath)
{
  global $bdd;
  $script = file_get_contents($filepath);
  return $bdd->prepare($script);
}
