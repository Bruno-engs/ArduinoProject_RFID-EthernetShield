<?php

include "conexao.php";

$s1_rec = $_GET['s1'];
$s2_rec = $_GET['s2'];
$s3_rec = $_GET['s3'];

echo $s1_rec,$s2_rec,$s3_rec;

$SQL_INSERT = "INSERT INTO tbsensores (sensor1, sensor2, sensor3)
 VALUES (:s1, :s2, :s3)";

$stmt = $conexao -> prepare($SQL_INSERT);

$stmt -> bindParam(":s1", $s1_rec);
$stmt -> bindParam(":s2", $s2_rec);
$stmt -> bindParam(":s3", $s3_rec);

if($stmt->execute()){
	echo " insert_ok";
}else{
	echo " insert_erro";
}


?>