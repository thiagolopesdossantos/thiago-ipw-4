<?php
include '2_trycatch.php';
//$query = "insert into teste (nome, email)values('thiago','thiago@gmail.com')";
$query ="update teste set nome = 'thiago T' where id = 9 ";
$query = "delete from 'teste' where 'teste'.'id' = 9";

$sql = $conexao->prepare($query);
$resultado = $sql->execute();
echo 'teste';
?>