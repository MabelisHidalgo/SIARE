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
      <link rel="stylesheet" type="text/css" href="../css/solicitud.css">
      
    <title>Informacion de Solicitud</title>
  </head>

  <body>
<!-- Contenido -->
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
  <?php include "../page/Includes/navbar.php"; ?>
  <!-- Fin Barra de navegacion -->
<!--Primer Div -->
      <br><br>
      <h3>Información de Solicitudes</h3>
      <br>
    <div class="container">
      <div class="clas-col-12">
          <div class="boxsol">
              <h4>Solicitud #00001</h4>
              <br>
                  <b>Fecha: Jueves, 31 de Octubre, 2019</b><br>
                  <b>Hora: 3:30 P.M</b><br>
                  <b>Lugar:Lobby,Edif 3</b><br>
                  <b>Nombre del Evento: FISC Fest Academy</b><br>
              <hr>
              <h4>Estado de solicitud</h4>
                    <br>
                    <button type="button" class="btn btn-secondary" disabled>Aprobada</button>
                            <!--btn btn-success-->
                    <br><br>
                    <button type="button" class="btn btn-danger" >Rechazada</button>
                            <!--btn btn-danger-->
                    <br><br>
                    <button type="button" class="btn btn-secondary" disabled>En proceso</button>
                            <!--btn btn-warning-->
                              
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