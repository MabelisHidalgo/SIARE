<?php session_start(); ?>
<?php include "../php/db.php"; ?>
<?php 

//Genera la lista de nombres de  eventos
  $usuario = $_SESSION["usuario"];
  global $connection;
  $datos = array();
  //$result_2 = array("Nombre_Evento"=>"", "Fecha" => "", "Hora_Inicio" => "", "Hora_fin" => "", "Description" => "", "Asistencia" => "");
  if($usuario == "Administrativo"){
    //query para tomar el ID y el nombre del evento
    $query_1 = "SELECT Nombre_Evento, ID FROM SOLICITUD WHERE EStado = 'pendiente'";
    $result_1 = mysqli_query($connection, $query_1);
  }

  //el post del formulario 1, para escoger el evento que se quiere ver
  if(isset($_POST["submit1"])){
    $option = $_POST['option'];
    //query para tomar los datos del de la solicitud 
    $query_2 = "SELECT Nombre_Evento, Fecha, Hora_Inicio, Hora_fin, Description, Asistencia FROM SOLICITUD WHERE ID = '$option'";
    $result_2 = mysqli_query($connection, $query_2);
    $datos = mysqli_fetch_array($result_2);
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
    <link rel="stylesheet" href="../css/esqueleto.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/standard.css">

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

	<title>Solicitudes por Revisar</title>

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
<h3 class="py-3">Solicitudes Pendientes</h3>
<!---------------------Formulario de opciones----------------------->
	<div class="container-fluid mx-2 pb-3">
    <select action="#.php" method="POST" name="#" id="opCuadro">
          <option value="Lugar">Lugar</option>
          <option value="Fecha">Fecha</option>
          <option value="Orden de llegada">Orden de llegada</option>
    </select>
  </div>
<!--------------------Estructura del Contenido---------------------->
<div class="container justify-content-md-center h-100">
    <div class="row justify-content-around">
      <div class="col-4" id="fondoSol">
        <h2>BANDEJA DE ENTRADA</h2>
        <form method = "post" action="solicitud_pendiente.php">
            <select name="option" size="11" id="histoCuadro">
              <?php 
                while($count = mysqli_fetch_array($result_1, MYSQLI_ASSOC)){
                  $nombre = $count["Nombre_Evento"];
                  $id = $count["ID"];
              ?>

                  <option value="<?php echo "$id"; ?>"> <?php echo "$nombre"; ?> </option>

               <?php }  ?>
      
            </select>

            <input class="btn btn-primary custom-btn" type="submit" name="submit1" value="Buscar" />
          <br>
        </form>
        <!-----------------Paginación(los botocitos que te llevan a la siguiente pagina)------------------>
        
        </div>
            <div class="col-6" id="fondoSol" style="max-width:600px;">
              <h2>INFORMACIÓN DEL EVENTO</h2>
                  
              <?php if(empty($datos) ){ ?>

                <h6>Nombre del evento: 
              <h6>Fecha del evento: 
              <h6>Hora de entrada: 
              <h6>Hora de salida: 
              <h6>Aproximado de   asistencia: 
              <h6>Descripción: 
                
              <?php }else{ ?>
                  <h6>Nombre del evento: <?php echo "$datos[0]" ; ?>  
                  <h6>Fecha del evento: <?php echo "$datos[1]"; ?> 
                  <h6>Hora de entrada: <?php echo "$datos[2]"; ?>
                  <h6>Hora de salida: <?php echo "$datos[3]"; ?>
                  <h6>Aproximado de   asistencia: <?php echo "$datos[5]"; ?>
                  <h6>Descripción: <?php echo "$datos[4]"; ?>
                
                <?php } ?>



                  
                  <!--<input type="submit" value="Ver Calendario" name="VerCalendario">-->
                  <button class="btn btn-primary custom-btn btn-block my-3"><a class="nav-link text-white" href="../page/calendar.html">Ver Calendario</a></button>
                
              <!------------------Cuadro de texto--------------------->
              <form action="">
                <textarea rows="5" cols="75" placeholder="Escriba sus comentarios aquí"></textarea><br>
                <input class="btn btn-primary custom-btn btn-space my-3" type="submit" name="Aceptar" value="Aceptar">
                <input class="btn btn-primary custom-btn btn-space my-3" type="submit" name="Rechazar" value="Rechazar">
              </form>


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
