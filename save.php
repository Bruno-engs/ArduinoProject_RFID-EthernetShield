<?php

include "connection.php";

$tag_rec = $_GET['tag'];


$SQL_INSERT = "INSERT INTO tbtags (Tag)
 VALUES (:tag)";

$stmt = $conexao -> prepare($SQL_INSERT);

$stmt -> bindParam(":tag", $tag_rec);

if($stmt->execute()){
	echo " insert_ok";
	header('Location: home.php');
}else{
	echo " insert_erro";
}


?>