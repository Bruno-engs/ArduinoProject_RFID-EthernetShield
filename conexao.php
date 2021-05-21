
<?php
  $db= mysqli_connect("localhost","root","") 
  or die (mysqli_error());
  mysqli_select_db($db,"dbarduino") 
  or die(mysqli_error());
    $CON_CONEXAO = "mysql:host=localhost;dbname=dbarduino;charset=utf8";
    $CON_USUARIO = 'root';
    $CON_SENHA = '';
    try{
	   $conexao = new PDO($CON_CONEXAO, $CON_USUARIO, $CON_SENHA);
	   echo "Conectado com sucesso ";
    }catch (PDOException $erro){
	   echo "erro:";
	   exit;
	
}
?>