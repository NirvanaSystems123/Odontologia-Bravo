<?php
// incluir archivo de configuración de la base de datos
include("model/conexion.php");

try {
    // consulta SQL para obtener las citas de la tabla reservas
    $sql = "SELECT ID AS id, Nombre AS title, Fecha AS start, Hora AS time FROM Reservas"; // se les cambia el "nombre" para que los datos de la Bd conincidad con el formato de la libreria que se esta utilizando: FullCalendar
    $stmt = $db->prepare($sql);
    $stmt->execute();

    // crea un array para almacenar las citas
    $citas = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // manejo de errores de la base de datos
    echo "Error en la base de datos: " . $e->getMessage();
}

// cierra la conexión a la base de datos
$db = null;

// convierte las citas a formato JSON para que JavaScript las pueda utilizar
$citas_json = json_encode($citas);
?>


    <div id='calendar'></div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth', //El calendario comienza en vista de mes.
            events: <?php echo $citas_json; ?>, // Carga las citas desde PHP
            locale: 'es', // Cambia el idioma a español
            eventTimeFormat: { //Define cómo se muestran las horas de los eventos 
                hour: 'numeric',
                minute: '2-digit',
                meridiem: 'short'
            },
            dayHeaderFormat: { //Cambia el formato de los encabezados de los días a abreviaturas de días, meses y números.
                weekday: 'short',
                month: 'numeric',
                day: 'numeric'
            },
            views: { //Define las diferentes vistas disponibles, como vista mensual (dayGridMonth), semanal (timeGridWeek), y diaria (timeGridDay).
                dayGridMonth: {},
                timeGridWeek: {},
                timeGridDay: {}
            },
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            navLinks: true, // Habilitar enlaces en los eventos para navegar
            editable: false // Permitir arrastrar y soltar eventos para moverlos
        });
        calendar.render(); // muestra el calendario con los ajustes hechos
    });
</script>
