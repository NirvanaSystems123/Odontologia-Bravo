<?php
#propiedades de host
$pass='';
$user = 'root';
$namedb = 'consultorio';

try {
    $db = new PDO( //$db que representará la conexión a la base de datos
        'mysql:host=localhost;dbname='.$namedb, $user, $pass
    );
} catch (Exception $error) {
    echo 'error conexion'.$error->getMessage();
    die();
}