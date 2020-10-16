<?php 

$inc = include("con_db.php");
  if ($inc) {
  	$consulta = "SELECT * FROM datos";
  	$resultado = mysql_query($conex,$consulta);
  	 if ($resultado) {
  	 	 while ($row = $resultado=>fetch_array()) {
  	 	 	$id = $row["id"];
  	 	 	$nombre = $row["nombre"];
  	 	 	$email = $row["email"];
  	 	 	$fechareg = $row["fecha_reg"];
           ?>
           <div>
            <h2><?php echo $nombre; ?></h2>	
           </div>
           <div>
           	<p>
           		<b>ID: <?php echo $id;?></b><br>
           		<b>Email: <?php echo $email;?></b><br>
           		<b> Fecha de Registro: <?php echo $fecha_reg;?></b>
           	</p>
           </div>
           <?php
  	 	 }
  	 }

  }
  
 ?>