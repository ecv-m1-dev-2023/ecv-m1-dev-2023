<?php

include_once("connect_database.php");

$folder = "./migrations/";
$files = scandir($folder);

// var_dump($files);

foreach ($files as $file) {
    $filePath = $folder . $file;
    $fileInfo = pathinfo($filePath);
    if (!is_dir($filePath) && $fileInfo['extension'] == "sql") {
        $content = file_get_contents($filePath);
        // var_dump($content);
        $req = $bdd->prepare($content);
        $req->execute();
        echo "script : " . $filePath . " was run with success <br>";
        echo "  --> <pre>" . $content . "</pre> <br><br>";
    }
}
