<!DOCTYPE html>
<html>
<title>ARDUINO COM MYSQL</title>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<div>
  <h2><center>Arduino com Mysql Registrando Acessos</center></h2>
  
<?php 
  include "conexao.php";  
   $sql = "SELECT * FROM tbsensores";
  $resultado = mysqli_query($db,$sql)  or die (mysqli_error());
  ?>
  <table>
    <thead>
      <tr>
        
        <th>Sensor 1</th>
        <th>Sensor 2</th>
		    <th>Sensor 3</th>

      </tr>
    </thead>
	<?php
     while ($linha=mysqli_fetch_array($resultado)) {                 
	 
	 $s1 = $linha["sensor1"];
	 $s2 = $linha["sensor2"];
	 $s3 = $linha["sensor3"];
	?>
    <tr>
      
      <td><?php echo "$s1"; ?></td>
      <td><?php echo "$s2"; ?></td>
	    <td><?php echo "$s3"; ?></td>

    </tr>
      <?php
	}
	mysqli_close($db);
   ?> 
  </table>
</div>

</body>
</html> 
