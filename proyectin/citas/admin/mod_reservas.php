<?php
include("header.php");
include("navbar.php");
//conexion de db
include 'model/conexion.php';

$sentencia = $db->query("SELECT * FROM reservas;"); //selecciona todos los registros de la tabla reservas
$dato = $sentencia->fetchAll(PDO::FETCH_OBJ); //recupera los resultado de la consulta y lo guarda en dato como un objeto

?>

    <div class="container"><!--Comienza Container-->
    <br><br>
        <div class="row"><!--Comienza Row-->

                <div class="container">
                    <br><br>
                    <div class="text-center">
                        <h3>Lista de registros</h3>
                        
                    </div><br>

                    <table class="table table-striped" id="tablaReservas">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>APELLIDOS</th>
                                <th>EMAIL</th>
                                <th>SERVICIO</th>
                                <th>FECHA</th>
                                <th>HORA</th>
                                <th>MENSAJE</th>
                                <th>ESTADO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dato as $registro) { //bucle, recorre los registros almacenados en dato ?> 
                                <tr>
                                    <td> <?php echo $registro->Nombre; ?> </td>
                                    <td> <?php echo $registro->Apellidos; ?> </td>
                                    <td> <?php echo $registro->Correo; ?> </td>
                                    <td> <?php echo $registro->Servicio; ?> </td>
                                    <td> <?php echo $registro->Fecha; ?> </td>
                                    <td> <?php echo $registro->Hora; ?> </td>
                                    <td> <?php echo $registro->MensajeAdicional; ?> </td>
                                    <td>
                                        <?php
                                        $estado = $registro->Estado; //acceder a la propiedad Estado del objeto $registro
                                        $clase_color = '';

                                        switch ($estado) {
                                            case 'Pendiente':
                                                $clase_color = 'text-warning'; // Amarillo para Pendiente
                                                break;
                                            case 'Cancelado':
                                                $clase_color = 'text-danger'; // Rojo para Cancelado
                                                break;
                                            case 'Confirmado':
                                                $clase_color = 'text-success'; // Verde para Confirmado
                                                break;
                                            default:
                                                $clase_color = ''; // Sin clase de color por defecto
                                                break;
                                        }
                                        ?>

                                        <b class="<?php echo $clase_color; ?>"><?php echo $estado; ?></b>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                        <a href="modal_eliminar.php" class="btn btn-sm btn-danger mr-1" data-toggle="modal" data-target="#confirmDelete" class="btn btn-sm btn-danger mr-1">Eliminar</a>
                                        <a href="update/form_update.php?id=<?php echo $registro->ID;?>" class="btn btn-sm btn-info mr-1">Editar</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>


        </div><!--Finaliza Row-->

    </div><!--Finaliza Container-->
                     
    <?php 
    include("modal_eliminar.php");
    include("../footer.php");
    ?>

    <script>
    // Tabla de reservas (admin/mod_reservas.php)
    $(document).ready(function() {
        $('#tablaReservas').DataTable({
            "scrollX": true, // Habilita el desplazamiento horizontal
            "scrollCollapse": true, // Hace que el encabezado y el pie de página se ajusten al desplazamiento
        });
    });
    </script> 

    