<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation Starter Template</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <!-- Compressed CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

<!-- Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text">Folha de Ponto</li>
          <li>
        </ul>
      </div>
    </div>
  </br>
    <form action="save.php">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-4 cell">
              <input type="text" name="tag" placeholder="TAG">
          </div>
          <div class="medium-4 cell">
          <button type="submit" class="success button">Save</button>  
          </div>          
        </div>
      </div>
    </form>
    </br>
    <?php 
  include "connection.php";  
   $sql = "SELECT * FROM tbtags";
  $resultado = mysqli_query($db,$sql)  or die (mysqli_error());
  ?>
  <table>
    <thead>
      <tr>
        
        <th width="200">ID</th>
        <th width="200">Tag</th>

      </tr>
    </thead>
	<?php
     while ($linha=mysqli_fetch_array($resultado)) {                 
	 
	    $tag = $linha["Tag"];
      $id = $linha["ID"];

	?>
    <tr>

      <td><?php echo "$id"; ?></td>
      <td><?php echo "$tag"; ?></td>

    </tr>
      <?php
	}
	mysqli_close($db);
   ?> 

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>