<?php
require_once("Database.php");

$id = $_POST["id"];
$tarefa = $_POST["tarefa"];

$stmt = $pdo->prepare("UPDATE tarefas SET tarefa_tarefa = ? WHERE id_tarefa = ?");
$stmt->bindParam(1, $tarefa); 
$stmt->bindParam(2, $id);
echo $stmt->execute();

?>