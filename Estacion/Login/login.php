<?php
include('conexion.php');

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta SQL para verificar las credenciales
    $query = "SELECT * FROM usuarios WHERE Correo = '$email' AND Contraseña = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Inicio de sesión exitoso, redireccionar al usuario al dashboard (Index.html)
        header("Location: /Estacion/Estacion/Index.html");
        exit;
    } else {
        // Redireccionar de vuelta al login con un mensaje de error
        header("Location: /Estacion/Estacion/Login/Login.html?error=1");
        exit;
    }

    // Cerrar la conexión
    mysqli_close($con);
}
?>
