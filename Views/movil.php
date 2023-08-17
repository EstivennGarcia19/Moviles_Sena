<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Inicio</title>
</head>
<body>

	<header>
		<nav>
			<div class="container">
				<ul class="row">
					<li><a href="../">Personas</a></li> 
					<li><a href="correos.php">Correo</a></li> 
					<li><a href="movil.php">Movil</a> </li>
					<li><a href="profesiones.php">Profesiones</a> </li>
					<li><a href="ciudades.php">Ciudades</a></li> 
					<li><a href="vigilante.php">Vigilante</a></li> 
					<li><a href="inform.php">informe</a></li> 
			    </ul>
			</div>
		</nav>

	</header>

	<main>
		<div id="p-section">

			<div class="container">

				<form action="../Controller/registerPhoneNum.php" method="POST" class="formulario">

					<h1>Registrar Movil</h1>

					<p>Registra tu numero de telefono en la base de datos</p>					

					<div class="cont-form">
						<input type="number" name="Documento" required="true" placeholder="Identificacion">												
					</div>	
					<div class="cont-form">
						<input type="number" name="Telefono" required="true" placeholder="Numero de telefono">												
					</div>	
					
					
					<button type="submit" value="Ingresar">Registrar</button>

					<div class="cont-form">
						
						<p>¿Quieres ver mas? <a href="showPhoneNum.php">Clic</a > aqui</p> <br>	

						<p> <a href="#">¿Olvidaste el correo o la contraseña ?</a> | <a href="#">Enviar verificación al correo</a></p>
						
					</div>
				
			</form>
				
			</div>
			
		</div>
	</main>
	
</body>
</html>