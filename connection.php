<?php
  $db= mysqli_connect("localhost","root","") 
  or die (mysqli_error());
  mysqli_select_db($db,"arduino_database") 
  or die(mysqli_error());
    $CON_CONEXAO = "mysql:host=localhost;dbname=arduino_database;charset=utf8";
    $CON_USUARIO = 'root';
    $CON_SENHA = '';
    try{
	   $conexao = new PDO($CON_CONEXAO, $CON_USUARIO, $CON_SENHA);
    }catch (PDOException $erro){
	   echo "erro:";
	   exit;
	
}
?>