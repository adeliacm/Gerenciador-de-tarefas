<?php

require_once("Database.php");
$stmt =$pdo->prepare("SELECT * FROM tarefas");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($resultado);

?>