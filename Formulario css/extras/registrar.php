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

                <form action="datos.php" method="POST" class="formulario">

                    <h1>Regístrate Gratis</h1>

                    <p>Mejora tu experiencia</p>



                    <div class="cont-form">
                        <!-- <label for="">Nombre</label> -->
                        <input type="text" name="nombre" required="true" placeholder="Nombre">
                    </div>

                    <div class="cont-form">
                        <!-- <label for="">Apellido</label> -->
                        <input type="text" name="apellido" required="true" placeholder="Apellido">
                    </div>

                    <div class="cont-form">
                        <!-- <label for="">Correo Electronico</label> -->
                        <input type="text" name="email" required="true" placeholder="Correo">
                    </div>



                    <div class="cont-form">
                        <!-- <label for="">Cargo</label> -->
                        <input type="text" name="cargo" required="true" placeholder="Cargo">
                    </div>

                    <div class="cont-form">
                        <!-- <label for="">Salario</label> -->
                        <input type="number" name="salario" min="0" step="0.01" required="true" placeholder="Salario">
                    </div>

                    <button type="submit">Registrar</button>

                    <div class="cont-form">
                        <p>¿Ya tienens una cuenta? <a href="../index.html">Iniciar Sesión</a> aqui</p>

                        <p>Al suscribirte aceptas nuestros <a href="#">Términos y condiciones</a>, <br> <a href="#">Reenviar confirmacion al correo</a></p>
                    </div>

                </form>

            </div>

        </div>
    </main>

</body>

</html>