<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=trello", "root", "");
    $pdo->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
}
catch(Execption $erro) {
    echo $erro->getMessage();
}

?>

