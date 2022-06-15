<?php

require 'connection.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$un = $_POST['un'];


if(empty($nome) || empty($un)){
  echo "<div><a href=\"estadosViewInsert.php\">Voltar</a></div>";
die('Informe os dados corretamente!');
}

try{
$connection->beginTransaction();

$stmt= $connection->prepare("INSERT INTO produtos (id,nome,un) VALUES (:id, :nome, :un)");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':un', $un);

$stmt->execute();

$connection->commit();
header('Location: index.php');
exit();

}
catch(Exception $e){
  $connection->rollBack();
  die("Transação não foi efetuada!" . $e->getMessage());
}