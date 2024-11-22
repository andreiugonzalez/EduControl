<?php
if (!empty($_POST["registrarse"])) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["email"];
    $contrasena = $_POST["password"];
    $confirmar_contrasena = $_POST["confirm_password"];
    $tipo_usuario = $_POST["t_usuario"];

    // Validar campos vacíos
    if (empty($nombre) || empty($correo) || empty($contrasena) || empty($confirmar_contrasena) || empty($tipo_usuario)) {
        echo '<div class="alerta">Uno de los campos está vacío</div>';
    }
    // Validar contraseñas
    elseif ($contrasena !== $confirmar_contrasena) {
        echo '<div class="alerta">Las contraseñas no coinciden</div>';
    }
    else {
        // Encriptar contraseña
        $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

        // Verificar si el correo ya existe
        $stmt = $conexion1->prepare("SELECT * FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            echo '<div class="alerta">El correo ya está registrado</div>';
        } else {
            // Insertar usuario
            $stmt = $conexion1->prepare("INSERT INTO usuarios (nombre, correo, contrasena, tipo_usuario) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nombre, $correo, $contrasena, $tipo_usuario);
            
            if ($stmt->execute()) {
                header("Location: portal.php");
                exit;
            } else {
                echo '<div class="alerta">Error al registrar el usuario. Intenta nuevamente.</div>';
            }

            $stmt->close();
        }
    }
}
?>
