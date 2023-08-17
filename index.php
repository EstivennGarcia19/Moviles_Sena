<?php

	require_once("Model/connection.php");
	require_once("Model/query.php");
	require_once("Controller/shows.php");

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Views/css/style.css">
	<title>Inicio</title>
</head>
<body>

	<header>
		<nav>
			<div class="container">
			<ul class="row">
					<li><a href="#">Personas</a></li> 
					<li><a href="Views/correos.php">Correo</a></li> 
					<li><a href="Views/movil.php">Movil</a> </li>
					<li><a href="Views/profesiones.php">Profesiones</a> </li>
					<li><a href="Views/ciudades.php">Ciudades</a></li> 
					<li><a href="Views/vigilante.php">Vigilante</a></li> 
					<li><a href="Views/inform.php">informe</a></li> 
			    </ul>
			</div>
		</nav>

	</header>

	<main>
		<div id="p-section">

			<div class="container">

				<form action="Controller/registerNewUser.php" method="POST" class="formulario">

					<h1>Registrar Persona</h1>

					<p>Registrate en la base de datos</p>					

					<div class="cont-form">
						<input type="text" name="Documento" required="true" placeholder="Documento">												
					</div>	
					<div class="cont-form">
						<select name="ciudad" id="">
							<option value="#">Seleccione una ciudad</option>
							<?php showCitiesToUser() ?>	
												
						</select>
					</div>	
					<div class="cont-form">
						<input type="text" name="nombres" required="true" placeholder="Nombres">												
					</div>	
					<div class="cont-form">
						<input type="text" name="apellidos" required="true" placeholder="Apellidos">												
					</div>	
					<div class="cont-form">
						<input type="text" name="sexo" required="true" placeholder="Sexo">												
					</div>	
					<div class="cont-form">
						<select name="profesion" id="">
							<option value="#">Seleccione una profesion</option>
							<?php showProfessionToUser() ?>	
												
						</select>
					</div>	
					
					<button type="submit" value="Ingresar">Registrar</button>

					<div class="cont-form">
						<p>¿Quieres ver a los usuarios registrados? <a href="Views/showUsers.php">Clic</a > aqui</p> <br>

						<p> <a href="#">¿Olvidaste el correo o la contraseña ?</a> | <a href="#">Enviar verificación al correo</a></p>
						
					</div>
				
				</form>
				
			</div>
			
		</div>
	</main>
	
</body>
</html>