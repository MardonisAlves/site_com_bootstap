<?php

/*conexao com bd com a classe PDO::*/

function conexao(){
try{


$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(PDOException $se){

 echo  $se->getMessage(); // mostrar  um error na conexao

}
return $pdo;

//return $pdo;  // retorna a conexao;

$id=$_GET["id"];

$busca=$pdo->prepare("SELECT * FROM user WHERE id =:id");
$busca->bindValue(":id",$id);
$busca->execute();
echo $busca->rowCount();
}




  
  
?>
