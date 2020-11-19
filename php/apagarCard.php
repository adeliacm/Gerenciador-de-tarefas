<?php

require_once("Database.php");
$id = $_POST['id'];
$stmt = $pdo->prepare("delete from cards where id_card = ?");
$stmt->bindParam(1, $id);
$stmt->execute();
?>