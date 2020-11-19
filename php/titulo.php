<?php
require_once("Database.php");

$id = $_POST["id"];
$titulo = $_POST["titulo"];

$stmt = $pdo->prepare("UPDATE cards SET titulo_card = ? WHERE id_card = ?");
$stmt->bindParam(1, $titulo); 
$stmt->bindParam(2, $id);
echo $stmt->execute();

?>