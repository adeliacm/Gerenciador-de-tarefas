<?php

require_once("Database.php");
$id = $_POST['id'];
$stmt = $pdo->prepare("delete from tarefas where id_tarefa = ?");
$stmt->bindParam(1, $id);
$stmt->execute();
?>