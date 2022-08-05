<?php

   try{
   $conexao = new PDO("mysql:host=localhost;dbname=pdo","root","");
   
   }
catch(\PDOException $e){
    echo 'não foi possivel realizar a conexao ';
	echo $e->getcode();
    echo $e->getMessage();
}
	
?>