<?php

require_once("Database.php");
$id = $_POST['id'];
$stmt = $pdo->prepare("INSERT INTO tarefas (tarefa_tarefa, id_card) VALUES (null, ?)");
$stmt->bindParam(1, $id);
echo $stmt->execute();


?>