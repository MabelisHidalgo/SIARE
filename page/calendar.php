<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
<!-- meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<!--font-->
      <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
<!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
<!--CSS-->
      <link rel="stylesheet" type="text/css" href="../css/standard.css">
      <link rel="stylesheet" type="text/css" href="../css/calendar.css">
<!--Calendar CSS-->
    <link href='../packages/core/main.css' rel='stylesheet' />
    <link href='../packages/daygrid/main.css' rel='stylesheet' />
    <link href='../packages/timegrid/main.css' rel='stylesheet' />
    <link href='../packages/list/main.css' rel='stylesheet' />
<!--Calendar JS-->
    <script src='../packages/core/main.js'></script>
    <script src='../packages/interaction/main.js'></script>
    <script src='../packages/daygrid/main.js'></script>
    <script src='../packages/timegrid/main.js'></script>
    <script src='../packages/list/main.js'></script>
    <script src='../packages/core/locales/es-us.js'></script>
    <script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
     locale:'es',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        
      },
      nowindicator:true,
      navLinks: true, // puedes hacer clic en los dias para navegar sus eventos
      businessHours: true, // muestra ciertas horas en los que se pueden programar eventos, 9-5 por default
      editable: true, //Permite arrastrar eventos
        selectable: true, //Permite seleccionar fechas
        
      events: [  //Insertar eventos aqui
          {
            url: '/myfeed.php',  //Los eventos pueden tener varios source, ver aqui https://fullcalendar.io/docs/event-model y https://fullcalendar.io/docs/event-source-object y https://fullcalendar.io/docs/events-json-feed
          },
        {
          title: 'Conferencia Ejemplo',
          start: '2019-12-03T13:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Presentacion Ejemplo',
          start: '2019-12-13T11:00:00',
          constraint: 'availableForMeeting',
        },
        {
          title: 'Conferencia Ejemplo 2',
          start: '2019-12-18',
          end: '2019-12-20'
        },
        {
          title: 'Fiesta',
          start: '2019-12-29T20:00:00'
        },

        // Muestra ciertas areas disponibles
        {
          groupId: 'availableForMeeting',
          start: '2019-12-11T10:00:00',
          end: '2019-12-11T16:00:00',
          rendering: 'background'
        },
        {
          groupId: 'availableForMeeting',
          start: '2019-12-13T10:00:00',
          end: '2019-12-13T16:00:00',
          rendering: 'background'
        },

        // Eventos no pueden ser programados en estas fechas
        {
          start: '2019-12-14',
          end: '2019-12-18',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        },
        {
          start: '2019-12-25',
          end: '2019-12-29',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        }
      ]
    });

    calendar.render();
  });

</script>
    <style>
          body {
            margin: 0px 0px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: auto;
          }
          #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
      

    <title>Calendario</title>
  </head>

  <body>
 <!--header-->
      <header>
         <div class="container text-center py-3">
             <div class="col-sm-12">
                 <img src="../img/logo_utp.png" class="logoutp">
                 <h4>Universidad Tecnológica de Panamá</h4>
                 <h5>Sistema para la Reservación de Eventos Academicos</h5>
             </div>
         </div>
      </header> 
<!-- Inicio Barra de navegacion -->
<?php include "../page/Includes/navbarAdm.php"; ?>
<!--fin de barra de navegación-->
  <br><br>
  <h3>Calendario de Eventos</h3>
   <div class="container">
      <div class="col-12">
         <div class="box">
            <div id='calendar'></div>
         </div>
      </div>
   </div>
              
<!--Fin Primer Div-->

<!-- Footer -->
<?php include "../page/Includes/footer.php"; ?>
<!-- Footer -->
<!-- JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/calendar.js"></script>
<!-- JS -->
  </body>
</html>