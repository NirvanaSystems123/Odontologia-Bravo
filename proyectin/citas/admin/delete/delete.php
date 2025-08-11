<?php 
#prueba de envio de datos
print_r ($_GET);
if (!isset($_GET["id"])) {
    header  ("Location: ../error.php");
}

$EliminarRegistro = $_GET['id'];
#conexion a db
include '../model/conexion.php';
#Sentencia sql para eliminar registros
$sentencia = $db->prepare('DELETE  FROM reservas WHERE id=?;');
$resultado = $sentencia->execute([$EliminarRegistro]);

if ($resultado==true) {
    header ('Location: ../mod_reservas.php');
}else{
    echo 'Error al eliminar el registro';
}
?>