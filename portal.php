<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduControl - Iniciar Sesión</title>
    <link rel="stylesheet" href="portal.css">
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
            <a style="color: #01548f;" href="portal.html" class="active">Portal</a>
            <a href="qr.html">Código QR</a>
        </nav>
    </header>

    <div class="titulof">
        <h2><span style="color: #10a5cd;">Ingresa </span><strong style="color: #093657;">para continuar</strong></h2>
    </div>
    <div class="inciosesion-contenedor">
        <form class="inicio-sesion">
            <div class="correo">
                <h3>Correo Electronico</h3>
                <input type="email" id="email" placeholder="Ingresa tu correo">
            </div>
            <div class="contrasena">
                <h3>Contraseña</h3>
                <input type="password" id="password" placeholder="Ingresa tu contraseña">
            </div>
            <div class="olvidastecontra">
                <a href="#" class="forgot-password">¿Olvidaste la contraseña?</a>
            </div>
            <div class="boton-ingresar">
                <button type="submit" class="login-button">Ingresar</button>
            </div>
            <div class="no-cuenta">
                <p>¿Aún no tienes cuenta? <a href="crear_cuenta.php" class="register-link" style="color: #093657;">crea una</a></p>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>