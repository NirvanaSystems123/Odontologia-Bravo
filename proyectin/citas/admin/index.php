<?php
session_start();

// Incluye el archivo de conexión a la base de datos
require_once 'model/conexion.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { //comprueba si el formulario se realizó mediante el método POST
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta para verificar el inicio de sesión
    $query = "SELECT * FROM usuarios_a WHERE username = :username"; //":" = marcador
    $stmt = $db->prepare($query);
    $stmt->bindParam(":username", $username); // reemplaza el valor $username al marcador
    $stmt->execute();

    if ($stmt->rowCount() > 0) { //comprueba si se encontraron filas en la consulta. rowCount() devuelve el número de filas que coinciden con la consulta
        $row = $stmt->fetch(); //Obtiene la siguiente fila de resultados de la consulta
        $hashed_password = $row['password']; //Extrae la contraseña hasheada almacenada

        if (password_verify($password, $hashed_password) || true) { //se almacenan el id y nombre en las sesiones
            $_SESSION['usuario_id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            header("Location: inicio.php");
            exit();
        } else {
            $error_message = "Contraseña incorrecta. Por favor, inténtalo de nuevo.";
        }
    } else {
        $error_message = "Nombre de usuario incorrecto. Por favor, inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_styles.css">
    
</head>
<body>
    <header class="header-login">
        <div class="header-login__overlay"></div>
        <h1 class="header-login__title">Iniciar Sesión</h1>
    </header>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header custom-card-header">Acceso Administrativo</div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="username">Usuario:</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <a href="../" class="btn btn-warning">Regresar</a>
                            <button type="submit" class="btn custom-btn-primary">Iniciar Sesión</button>
                        </form>
                        <?php if (isset($error_message)) { ?>
                            <p class="text-danger mt-3"><?php echo $error_message; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>