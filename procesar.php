<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglos</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-danger">
  		<div class="hero-body">
    		<p class="title">
			Práctica 01 de programación

<h1> Ingrese los siguientes datos</h1>
    		</p>
  		</div>
	</section>

	<section class="section is-medium columns">

  		<div class="column"></div>

  		<div class="column is-two-fifths">
			

  			<?php
	
				$nombre = $_POST['nombre'];
				$appaterno = $_POST['appaterno'];
				$apmeterno = $_POST['apmeterno'];
				$carg = $_POST['carg'];
				$curp = $_POST['curp'];
				$domicilio = $_POST['domicilio'];
				$sex = $_POST['sex'];
				$rfc = $_POST['rfc'];
				$curp = $_POST['curp'];
				$correo = $_POST['correo'];
				$telefono = $_POST['telefono'];
				$referenciafamiliar = $_POST['referenciafamiliar'];
				$fechadenacimiento = $_POST['fechadenacimiento'];
				$EST = $_POST['EST'];
				$es = $_POST['es'];
				$comentarios = $_POST['comentarios'];

				echo "<h1 class='is-subtitle'>";
				echo "Bienvenido: " . $nombre . " ". $appaterno . " ".$apmeterno . " .";
				echo "<br>Eres:  " . $carg . " .";
				echo "<br>Tu genero es: " . $sex;
				echo "<br>RFC: " . $rfc;
				echo "<br>CURP: " . $curp;
				echo "<br>Tu domicilio es: " . $domicilio;
				echo "<br>Correo Electronico: " . $correo;
				echo "<br>Telefono: " . $telefono;
				echo "<br>Referencia Familiar: " . $referenciafamiliar;
				echo "<br>Fecha de nacimiento: " . $fechadenacimiento;
				echo "<br>Estado Civil: " . $EST;
				echo "<br>Escolarizado: " . $es;
				echo "<br>Comentarios: " . $comentarios;
				echo "</h1>";
			?>


		</div>

		<div class="column"></div>

	</section>

</body>
</html>



