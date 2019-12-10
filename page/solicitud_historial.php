<?php session_start(); ?>
<?php include "../php/db.php"; ?>
<?php 
  global $connection;
  $usuario = $_SESSION["usuario"];
  $datos = array();
  if($usuario == "Administrativo"){
    //query para tomar el ID y el nombre del evento
    $query = "SELECT Nombre_Evento, ID FROM SOLICITUD WHERE EStado <> 'pendiente'";
    $result = mysqli_query($connection, $query);
  }

  if(isset($_POST["submit"])){
    $option = $_POST['option'];
    //query para tomar los datos del de la solicitud 
    $query = "SELECT Nombre_Evento, Lugar, Fecha, Hora_Inicio, Hora_fin, Description, Asistencia, EStado FROM SOLICITUD WHERE ID = '$option'";
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

<!--CSS-->
    <link href="../css/esqueleto.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/standard.css">

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

	<title>Historial de Solicitudes</title>

</head>
<body class="body">
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
<!-- Fin Barra de navegacion -->

<!----------------------CONTENIDO------------------------->
<h3 class="py-3">Historial de Solicitudes</h3>
<!---------------------Formulario de opciones----------------------->
	<!--<div class="container-fluid mx-2 pb-3">
    <select action="#.php" method="POST" name="#" id="opCuadro">
          <option value="Lugar">Lugar</option>
          <option value="Fecha">Fecha</option>
          <option value="Orden de llegada">Orden de llegada</option>
    </select>
  </div>
<!--------------------Estructura del Contenido---------------------->
<div class="container justify-content-md-center h-100">
    <div class="row justify-content-around">
      <div class="col-sm-12 col-md-5 col-lg-4" id="fondoSol">
        <h2>HISTORIAL DE SOLICITUDES</h2>
        <form action="../page/solicitud_historial.php" method="post">
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
          <input class="btn btn-primary custom-btn" type="submit" name="submit" value="Buscar" />
        </form>
        <!-----------------Paginación(los botocitos que te llevan a la siguiente pagina)------------------>
        
        </div>

            <div class="col-sm-12 col-md-7 col-lg-6" id="fondoSol" style="max-width: 600px;">
              <h2>DATOS DE LA SOLICITUD</h2>
            <!------------------Información sobre la solicitud--------------------->
                
            <?php if(empty($datos) ){ ?>

              <ul id="textoNegrita">
                  <li>TITULO DEL EVENTO</li>
                  <li>LUGAR: ******</li>
                  <li>FECHA: ******</li>
                  <li>HORA: ******</li>
                  <li>NOMBRE DEL SOLICITANTE: ******</li>
                  <li>DETALLES: ******</li>
                  <li>ESTADO DEL EVENTO: ******</li>
                  <li>ENCARGADO DE LA ACEPTACIÓN O RECHAZO DEL EVENTO: ******</li>
            </ul>
                
              <?php }else{ ?>
                <ul id="textoNegrita">
                  <li> <?php echo "$datos[0]" ; ?>  </li>
                  <li>LUGAR: <?php echo "$datos[1]" ; ?>  </li>
                  <li>FECHA: <?php echo "$datos[2]" ; ?>  </li>
                  <li>HORA DE ENTRADA: <?php echo "$datos[3]" ; ?>  </li>
                 <!-- <li>NOMBRE DEL SOLICITANTE: enim nulla cillum enim</li> -->
                  <li>HORA DE SALIDA: <?php echo "$datos[4]" ; ?>  </li>
                  <li>ASISTENCIA: <?php echo "$datos[5]" ; ?>  </li>
                  <li>DESCRIPCIÓN: <?php echo "$datos[6]" ; ?>  </li>
                  <li>ESTADO: <?php echo "$datos[7]" ; ?>  </li>
                </ul>
              <?php } ?>

            </div>
      </div>
</div>
<!------------------------------INICIO DEL FOOTER------------------------------>
<?php include "../page/Includes/footer.php"; ?>
<!-- JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/calendar.js"></script>
<!-- JS -->
</body>
</html>
