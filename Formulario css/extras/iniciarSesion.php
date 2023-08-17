<?php

$email = $_POST['email'];
$password = $_POST['password'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registrar Usuario</title>
</head>

<body>

    <header>
        <nav>
            <div class="container">
                <ul class="row">
                    <li><a href="../index.html">Inicio</a> </li>
                    <li><a href="registrar.php">Registrar</a> </li>
                    <li><a href="empleados.php">Empleados</a> </li>
					<li><a href="cerrarSesion.php">Salir</a></li> 
                </ul>
            </div>
        </nav>

    </header>

    <main>
        <div id="p-section">

            <div class="container">
               <div class="formulario">
                    <div class="contenido">
                        <p>Has Iniciado Sesión correctamente</p>
                    </div>
               </div>

            </div>

        </div>
    </main>

</body>

</html>