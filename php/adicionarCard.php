<?php

require_once("Database.php");

$stmt = $pdo->prepare("INSERT INTO cards (titulo_card) VALUES (null)");
echo $stmt->execute();

 ?>