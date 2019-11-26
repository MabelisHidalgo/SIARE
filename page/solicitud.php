<?php session_start(); ?>
<?php include "../php/db.php"; ?>
<?php 
global $connection;
$id = $_SESSION['id'];
$sql = "SELECT ID FROM SOLICITUD WHERE UsuarioID = '$id'";
$result = mysqli_query($connection, $sql);


$count = mysqli_num_rows($result);



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
    <div class="container">
      <div class="col-4">
          <div class="boxsol">
                          <div class="dropdown">
            <div class="overflow-auto">
            <!-- Solicitud 1 -->    
            <form action="../page/infosolicitud.php" method="post">
          
            
            
            <?php 
            if($count == 0){
              echo "<p>sin solicitud de momento</p>";
              
            }else{
              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $test = $row["ID"]; ?>

                <input class="btn btn-primary custom-btn" type="submit" name="dato" value="<?php echo "$test"; ?>"><br><br><br>

                <?php 
              }
            }
            
            
            
            
            ?>

            </form>

            
            
                
           </div>
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