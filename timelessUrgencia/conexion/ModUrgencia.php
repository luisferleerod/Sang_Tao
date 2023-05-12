<?php
include ("dbh.inc.php");


session_start();
if(isset($_SESSION['username'])){

$username = $_SESSION['username'];
// Obtener la fecha actual
$fechaActual = date('Y-m-d H:i:s');

// Consulta para obtener la diferencia de días y actualizar el valor de id_Urgencia en la tabla actividades
$sql = "UPDATE actividad SET id_urgencia = 
        CASE 
            WHEN DATEDIFF(fecha_hora_inicio, '$fechaActual') < 10 AND id_importancia = 1 THEN 1
            WHEN DATEDIFF(fecha_hora_inicio, '$fechaActual') > 10 AND id_importancia = 1 THEN 2
            WHEN DATEDIFF(fecha_hora_inicio, '$fechaActual') < 5 AND id_importancia = 2 THEN 1
            WHEN DATEDIFF(fecha_hora_inicio, '$fechaActual') > 5 AND id_importancia = 2 THEN 2
            ELSE 2
        END
        WHERE usuario = '$username'";


mysqli_query($con,$sql);
}
?>