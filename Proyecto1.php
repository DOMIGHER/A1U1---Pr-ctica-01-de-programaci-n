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
			<form action="procesar.php" method="post">
				<div>
					<label>Nombre:</label>
					<input class="input is-primary" type="text" name="nombre" required>
				</div>

				<div>
					<label>Apellido Paterno:</label>
					<input class="input is-primary" type="text" name="appaterno" required>
				</div>

				<div>
					<label>Apellido Materno:</label>
					<input class="input is-primary" type="text" name="apmeterno" required>
				</div>

				<div><br>
					<label>Cargo:</label><br>
					<input id="est" type="radio" name="carg" value="Estudiante": required>
					<label for="Estudiante">Estudiante</label>

					<input id="mae" type="radio" name="carg" value="Mestro": required>
					<label for="Mestro">Maestro</label>
				</div>


				<div><br>
					<label>Sexo:</label><br>
					<input id="mas" type="radio" name="sex" value="Masculino": required>
					<label for="mas">Masculino</label>

					<input id="fem" type="radio" name="sex" value="Femenino": required>
					<label for="fem">Femenino</label>
				</div><br>

				<div>
					<label>RFC:</label>
					<input class="input is-primary" type="text" name="rfc" required>
				</div>

				<div>
					<label>CURP:</label>
					<input class="input is-primary" type="text" name="curp" required>
				</div>

				<div>
					<label>Domicilio:</label>
					<input class="input is-primary" type="text" name="domicilio" required>
				</div>


				<div>
					<label>Correo electrónico:</label>
					<input class="input is-primary" type="emaill" name="correo" required>
				</div>

				<div>
					<label>Teléfono</label>
					<input class="input is-primary" type="number" name="telefono"  required>
				</div>

				<div>
					<label>Referencia Familiar:</label>
					<input class="input is-primary" type="text" name="referenciafamiliar" required>
				</div>

				<div>
					<label>Fecha de nacimiento:</label>
					<input class="input is-primary" type="date" name="fechadenacimiento" required>
				</div>


				<div><br>
					<label>Estado Civil:</label><br>
					<input id="sol" type="radio" name="EST" value="Soltero": required>
					<label for="sol">Solter@</label>

					<input id="cas" type="radio" name="EST" value="Casado": required>
					<label for="cas">Casad@</label>
				</div><br>

				<div>
					<label>Escolarizado:</label><br>
					<input id="esc" type="radio" name="es" value="Escolarizado": required>
					<label for="esc">Escolarizado</label>

					<input id="sab" type="radio" name="es" value="Sabatino": required>
					<label for="sab">Sabatino</label>
				</div><br>


				<div>
					<label>Comentarios:</label>
					<input class="input is-primary" type="text" name="comentarios" required>
				</div>

				<div>
					<input class="button is-danger" type="submit" value="Enviar">
				</div>
			</form>
		</div>

		<div class="column"></div>

	</section>

</body>
</html>