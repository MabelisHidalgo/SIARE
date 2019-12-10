<?php session_start(); ?>
<?php include "../php/db.php"; ?>
<?php 
global $connection;
$datos = array();
$usuario = $_SESSION["id"];
$sql = "SELECT Nombre_Evento, ID FROM SOLICITUD WHERE UsuarioID = '$usuario'";
$result = mysqli_query($connection, $sql);

if(isset($_POST["submit"])){

  $option = $_POST['option'];
  $query = "SELECT Nombre_Evento, Fecha, Hora_Inicio, Hora_fin, Lugar, EStado FROM SOLICITUD WHERE ID = '$option'";
    $result_1 = mysqli_query($connection, $query);   
    $datos = mysqli_fetch_array($result_1); 
}

?>
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
 <h3>Informacion de Solicitudes</h3>
 <br>
     <div class="class container">
          <div class="class row">
              <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="class boxper">
                    <form action="../page/solicitud.php" method = "post">
                        <select name="option" size="6" id="histoCuadro">
                        <?php 
                             while($count = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                              $nombre = $count["Nombre_Evento"];
                              $id = $count["ID"];
                        ?>

                            <option value="<?php echo "$id"; ?>"> <?php echo "$nombre"; ?> </option>

                        <?php }  ?>
                        </select>
                       <br>
                        <input class="btn btn-primary custom-btn" type="submit" name="submit" value="Ver Solicitud">
                       
                  </form>
                </div>
              </div>
              <br><br><br>
              <div class="col-sm-12 col-md-7 col-lg-8">
                 <div class="class boxsol">
                   <?php if(empty($datos)){  ?>

                    <h4>Solicitud #00001</h4>
                    <br>
                      <b>Nombre del evento: </b><br>
                      <b>Fecha: </b><br>
                      <b>Hora de entrada: </b><br>
                      <b>Hora de salida: </b><br>
                      <b>Lugar:</b><br>
                    <hr>
                    <h4>Estado de solicitud: </h4>
                    <br>
                    <?php }else{ ?>
                      <h4>Solicitud #<?php echo "$option"; ?></h4>
                    <br>
                      <b>Nombre del evento: <?php echo "$datos[0]" ; ?> </b><br>
                      <b>Fecha: <?php echo "$datos[1]" ; ?></b><br>
                      <b>Hora de entrada: <?php echo "$datos[2]" ; ?></b><br>
                      <b>Hora de salida: <?php echo "$datos[3]" ; ?></b><br>
                      <b>Lugar: <?php echo "$datos[4]" ; ?></b><br>
                    <hr>
                    <h4>Estado de solicitud: <?php echo "$datos[5]" ; ?></h4>
                    <br>
                    <?php } ?>
                 </div>
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