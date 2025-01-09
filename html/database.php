<?php

function connect_server($dbname = '')
{
  $dsn = "mysql:host=db;charset=utf8";

  if ($dbname) {
    $dsn .= ';dbname=' . $dbname;
  }
  return new PDO($dsn, "root", "password");
}


function load_script($bdd, $filepath)
{
  $script = file_get_contents($filepath);
  return $bdd->prepare($script);
}
