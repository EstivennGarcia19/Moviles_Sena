<?php

	require_once("../Model/connection.php");
	require_once("../Model/query.php");
	require_once("../Controller/shows.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Usuarios | Empleados</title>
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

            <div class="container more-space">

               <table class="tabla">
                    <tr>
                        <td>ID del vigilante</td>
                        <td>Registro</td>
                        <td></td>
                        
                    </tr>
                    <?php showVigilantes() ?>
                    
        
               </table>

            </div>

        </div>
    </main>

</body>

</html>