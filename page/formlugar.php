<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale  =1" />
   <!--font-->
   <link href="https://fonts.googleapis.com/css?family=Didact Gothic" rel="stylesheet" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css" />
   <!--CSS-->
   <link rel="stylesheet" type="text/css" href="../css/standard.css" />
   <link rel="stylesheet" type="text/css" href="../css/formlugar.css" />

   <title>Solicitud de Espacio</title>
</head>

<body>
   <!--header-->
   <header>
      <div class="container text-center py-3">
         <div class="col-sm-12">
            <img src="../img/logo_utp.png" class="logoutp" />
            <h4>Universidad Tecnológica de Panamá</h4>
            <h5>Sistema para la Reservación de Eventos Academicos</h5>
         </div>
      </div>
   </header>
   <!-- Inicio Barra de navegacion -->
   <?php include "../page/Includes/navbar.php"; ?>
   <!-- Fin Barra de navegacion -->
   <h3>Solicitud de Espacio</h3>
   <br />
   <div class="container">
      <div class="col-sm-12">
         <div class="boxfrm">
            <!--Formulario-->
            <form method="post" action="../php/formularios.php">
               <!-- Campo-->
               <div class="row">
                  <div class="col-sm-12 col-md-3">
                     Lugar del evento:
                  </div>
                  <div class="col-sm-12 col-md-9">
                     <select type="text" id="datos2" name="Lugar">
                        <option value="Lobby Edf 3">Lobby Edf 3</option>
                        <option value="Salon de Eventos Edf 1">Salon de Eventos Edf 1</option>
                        <option value="Salon de Eventos Edf Postgrado">Salon de Eventos Edf Postgrado</option>
                        <option value="Auditorio CVLS">Auditorio CVLS</option>
                     </select>
                     <br /><br />
                  </div>
               </div>
               <!-- Campo-->
               <div class="row">
                  <div class="col-sm-12 col-md-3">
                     Fecha:
                  </div>
                  <div class="col-sm-12 col-md-9">
                     <input type="date" id="datos2" name="fecha" /><br /><br />
                  </div>
               </div>
               <!-- Campo-->
               <div class="row">
                  <div class="col-sm-12 col-md-3">
                     Hora entrada:
                  </div>
                  <div class="col-sm-12 col-md-9">
                     <input type="time" id="datos2" name="horaEntrada" min="=07-" /><br /><br />
                  </div>
               </div>
               <!-- Campo-->
               <div class="row">
                  <div class="col-sm-12 col-md-3">
                     Hora salida:
                  </div>
                  <div class="col-sm-12 col-md-9">
                     <input type="time" id="datos2" name="horaSalida" min="=07-" /><br /><br />
                  </div>
               </div>
               <hr />
               <!-- Campo-->
               <div class="row">
                  <div class="col-sm-12 col-md-3">
                     Nombre del evento:
                  </div>
                  <div class="col-sm-12 col-md-9">
                     <input type="text" id="datos2" name="nombreEvento" /><br /><br />
                  </div>
               </div>
               <!-- Campo-->
               <div class="row">
                  <div class="col-sm-12 col-md-3">
                     Descripción:
                  </div>
                  <div class="col-sm-12 col-md-9">
                     <input type="text" id="descrip" name="descripcion" /><br /><br />
                  </div>
               </div>
               <!-- Campo-->
               <div class="row">
                  <div class="col-sm-12 col-md-3">
                     Asistentes al evento:
                  </div>
                  <div class="col-sm-12 col-md-9">
                     <input type="number" id="datos2" name="personas" min="10" max="600" /><br /><br />
                  </div>
               </div>
               <hr />
               <!-- Campo-->
               <div class="row">
                  <div class="col-sm-12  col-md-8">
                     Agregar mobiliario <input type="checkbox" name="directMob" value="1"/>
                     <br /><br />
                     <!--<button class="btn btn-primary btn-sm custom-btn"> 
                        <a class="nav-link text-white" href="../page/formmobiliario.php">Ver Formulario</a>-->
                     </button>
                     <br /><br />
                     Agregar prensa <input type="checkbox" name="directPren" value="1"/> <br /><br />
                     <!--<button class="btn btn-primary btn-sm custom-btn"> 
                        <a class="nav-link text-white" href="../page/formprensa.php">Ver Formulario</a>-->
                     </button>
                  </div>
                  <div class="col-sm-12  col-md-4 text-center py-5 my-3">
                     <input class="btn btn-primary custom-btn" type="submit" name="submit" value="submit" />
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Footer -->

<?php include "../page/Includes/footer.php"; ?>


<!-- Footer -->

   <!-- JS -->
   <script src="../js/jquery-3.3.1.slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <!-- JS -->
</body>

</html>