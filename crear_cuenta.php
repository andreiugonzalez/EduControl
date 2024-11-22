
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduControl - Crear Cuenta</title>
    <link rel="stylesheet" href="crear_cuenta.css">
    <link rel="shortcut icon" href="imagenes/logo_edu.JPG" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>      



    <header>
        <div class="logo">
            <img src="imagenes/logo_edu.JPG" alt="Logo EduControl">
            <h1>
                <span class="edusize">Edu</span>
                <span class="controlsize">Control</span>
            </h1>
        </div>
        <nav>
            <a href="Inicio.html">Inicio</a>
            <a style="color: #01548f;" href="portal.php" class="active">Portal</a>
            <a href="qr.html">Código QR</a>
        </nav>
    </header>


    <?php
    include("conexion.php");
    include("controladores/registro.php");
    ?>



    <div class="titulof">
        <h2><span style="color: #10a5cd;">Crea tu </span><strong style="color: #093657;">cuenta</strong></h2>
    </div>

    <div class="inciosesion-contenedor">
        <form class="inicio-sesion" action="crear_cuenta.php" method="POST">
            <div class="nombre">
                <label for="nombre"><h3>Nombre</h3></label>
                <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre" required autocomplete="name">
            </div>
            <div class="correo">
                <label for="email"><h3>Correo Electrónico</h3></label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required autocomplete="email">
            </div>
            <div class="contrasena">
                <label for="password"><h3>Contraseña</h3></label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <div class="confirmar-contrasena">
                <label for="confirm_password"><h3>Confirmar Contraseña</h3></label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirma tu contraseña" required>
            </div>
            <div class="tipo_usuario">
                <label for="t_usuario"><h3>Tipo de Usuario</h3></label>
                <select id="t_usuario" name="t_usuario" required>
                    <option value="" disabled selected>Selecciona tu tipo de usuario</option>
                    <option value="alumno">Alumno</option>
                    <option value="apoderado">Apoderado</option>
                    <option value="docente">Docente</option>
                </select>
            </div>

            <div class="boton-ingresar">
                <button type="submit" class="login-button" name="registrarse">Registrar</button>
            </div>

            <div class="no-cuenta">
                <p>¿Ya tienes cuenta? <a href="portal.html" class="register-link" style="color: #093657;">Iniciar sesión</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>