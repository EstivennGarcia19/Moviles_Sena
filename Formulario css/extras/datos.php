<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];

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
                        <h1>
                            <span>Bienvenido</span>
                        </h1>
                        
                        <p>Te has registrado a la base de datos</p>

                        <br>

                        <p><?php echo "Hola <strong> {$nombre} {$apellido} </strong> su correo electronico es <strong>$email</strong> en la empresa tiene la funcion de <strong>$cargo</strong> y al mes se gana <strong>$salario</strong> ";  ?> </p>


                    </div>

                    
               </div>

            </div>

        </div>
    </main>

</body>

</html>