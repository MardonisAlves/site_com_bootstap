<?php


include("conecta.php");
$pdo = conexao();


$id=1;

$busca=$pdo->prepare("SELECT * FROM user WHERE id =:id");
$busca->bindValue(":id",$id);
$busca->execute();
echo $busca->rowCount();


?>