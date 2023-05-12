
<?php
/*
// Incluye el archivo de conexión a la base de datos
include ("dbh.inc.php");
session_start();
$username = $_SESSION['username'];
// Consulta para obtener los eventos de la base de datos
$query = "SELECT * FROM actividad where 'usuario'=$username";

// Ejecuta la consulta y obtiene los resultados
$resultado = mysqli_query($con, $query);

// Arreglo donde se guardarán los eventos
$eventos = array();

// Recorre los resultados de la consulta y agrega los eventos al arreglo
while($fila = mysqli_fetch_assoc($resultado)) {
  $evento = array();
  $evento['title'] = $fila['titulo'];
  $evento['start'] = $fila['fecha_hora_inicio'];
  $evento['end'] = $fila['fecha_hora_fin'];
  $evento['descripcion'] = $fila['descripcion'];
  array_push($eventos, $evento);
}

// Devuelve los eventos como JSON
echo json_encode($eventos);

// Cierra la conexión a la base de datos
mysqli_close($con);
*/

<?php
// Incluye el archivo de conexión a la base de datos
include ("dbh.inc.php");
session_start();
$username = $_SESSION['username'];
// Consulta para obtener los eventos de la base de datos
$query = "SELECT * FROM actividad where 'usuario'=$username";

// Ejecuta la consulta y obtiene los resultados
$resultado = mysqli_query($con, $query);

// Arreglo donde se guardarán los eventos
$eventos = array();

// Recorre los resultados de la consulta y agrega los eventos al arreglo
while($fila = mysqli_fetch_assoc($resultado)) {
  $evento = array();
  $evento['title'] = $fila['titulo'];
  $evento['start'] = $fila['fecha_hora_inicio'];
  $evento['end'] = $fila['fecha_hora_fin'];
  $evento['descripcion'] = $fila['descripcion'];
  array_push($eventos, $evento);
}

// Devuelve los eventos como JSON
echo json_encode($eventos);

// Cierra la conexión a la base de datos
mysqli_close($con);


?>