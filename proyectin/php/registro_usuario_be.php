<?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo          = $_POST['correo'];
$usuario         = $_POST['usuario'];
$contrasena      = $_POST['contrasena'];

// encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);

// verificar que el correo no se repita
$stmt = $conexion->prepare("SELECT id FROM usuarios WHERE correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<script>
        alert('Este correo ya está registrado, por favor intente con otro diferente');
        window.location='../index.php';
    </script>";
    exit();
}
$stmt->close();

// verificar que el usuario no se repita
$stmt = $conexion->prepare("SELECT id FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<script>
        alert('Este usuario ya está registrado, por favor intente con otro diferente');
        window.location='../index.php';
    </script>";
    exit();
}
$stmt->close();

// insertar nuevo usuario
$stmt = $conexion->prepare("INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre_completo, $correo, $usuario, $contrasena);

if ($stmt->execute()) {
    echo "<script>
        alert('Usuario registrado exitosamente');
        window.location='../index.php';
    </script>";
} else {
    echo "<script>
        alert('Inténtalo de nuevo, usuario no registrado correctamente');
        window.location='../index.php';
    </script>";
}

$stmt->close();
mysqli_close($conexion);
?>
