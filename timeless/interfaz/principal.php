<?php

try {
  $mbd = new PDO('mysql:host=192.168.77.45;dbname=casti', "jjosegomez", "luchopelucho");
  session_start();
  if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $sth = $mbd->query("SELECT * FROM actividad WHERE usuario = '$username'");
  }
} catch (PDOException $e) {
  echo "No conectado";
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Codigo del full calendar-->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>

    
    <!-- funcionalidad y uso de FullCalendar-->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
    
        var calendar = new FullCalendar.Calendar(calendarEl, {

          
          headerToolbar: {
            left: 'prev,next today actividad evento modificarEvento',
            center: 'title',
            right: 'month week day list'
          },

          customButtons: {
            actividad: {
              text: '+ Actividad',
              click: function() {
                
                // Redirige al usuario a la página nueva_actividad.html
                window.location.href = 'Actividadxentrega.html';
              }
            },
            evento: {
              text: '+ Evento',
              click: function() {
                
                // Redirige al usuario a la página nueva_actividad.html
                window.location.href = 'EventoFijo.html';
              }
            },

            modificarEvento: {
              text: 'Modificar Evento',
              click: function () {
                window.location.href = 'ModEvento.html';
              }
            }, 

          },

           

          initialView: 'dayGridMonth',
          views: {
            month: { // Vista de mes
              type: 'dayGrid',
              duration: { months: 1 }
            },
            week: { // Vista de semana
              type: 'timeGridWeek',
              duration: { weeks: 1 }
            },
            day: { // Vista de día
              type: 'timeGridDay',
              duration: { days: 1 }
            },
            list: { // Vista de lista
              type: 'listMonth',
              duration: { months: 1 },
              buttonText: 'Lista'
            }
          },

          dateClick: function(info) {
            var dateObj = info.date;
            var year = dateObj.getUTCFullYear();
            var month = ('0' + (dateObj.getUTCMonth() + 1)).slice(-2);
            var day = ('0' + dateObj.getUTCDate()).slice(-2);
            var hours = ('0' + dateObj.getUTCHours()).slice(-2);
            var minutes = ('0' + dateObj.getUTCMinutes()).slice(-2);
            var seconds = ('0' + dateObj.getUTCSeconds()).slice(-2);
            var dateStr = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
            console.log(dateStr);

          },

          eventClick: function(info) {
            // obtenemos el título del evento seleccionado
            var titulo = info.event.title;

            // redirigimos a la página ModAct.html y pasamos el título en la URL
            window.location.href = 'ModAct.html?titulo=' + encodeURIComponent(titulo);
          },

          // Mustra las actividades que lea de la base de datos
          events: [
            <?php foreach($sth as $fila): ?>
              {
                title: "<?php echo $fila["titulo"]; ?>",
                start: "<?php echo $fila["fecha_hora_inicio"]; ?>",
                end: "<?php echo $fila["fecha_hora_fin"]; ?>",
                color: "#3A87AD",
                textColor: "#ffffff"
              },
            <?php endforeach; ?>

          ]

        });

        calendar.setOption('locale', 'Es');
        calendar.render();
      });
    </script>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">    

  <title>TIME-LESS</title>
  
</head>

<body class="pantalla_principal">

  <header class="header">
    <a href="principal.html">
      <img src="img/LogoLema.png" alt="Logo centro" class="header__logo">
    </a>
  </header>

  <div id='calendar'  class="calendario container"></div>
  </body>
</html>
