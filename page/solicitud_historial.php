<?php session_start(); ?>
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
        <h2>HISTORIAL DE SOLICITUDES</h2>
        <form action="/action_page.php">
            <select name="#" size="11" id="histoCuadro">
              <option value="1">duis veniam quid nulla labore</option>
              <option value="">fore irure quorum summis quid</option>
              <option value="">fore quis sint eram quis</option>
              <option value="">minim nisi aliqua tempor duis</option>
              <option value="">fore irure quorum summis quid</option>
              <option value="">duis veniam quid nulla labore</option>
              <option value="">minim nisi aliqua tempor duis</option>
              <option value="">minim nisi aliqua tempor duis</option>
              <option value="">minim nisi aliqua tempor duis</option>
              <option value="">fore irure quorum summis quid</option>
              <option value="">fore irure quorum summis quid</option>
            </select>
          <br>
        </form>
        <!-----------------Paginación(los botocitos que te llevan a la siguiente pagina)------------------>
        <nav aria-label="Paginacion">
            <ul class="pagination justify-content-center my-2">
                  <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                  </li>
            </ul>
        </nav>
        </div>

            <div class="col-6" id="fondoSol" style="max-width: 600px;">
              <h2>DATOS DE LA SOLICITUD</h2>
            <!------------------Información sobre la solicitud--------------------->
                <ul id="textoNegrita">
                  <li>TITULO DEL EVENTO</li>
                  <li>LUGAR: illum nisi cillum aute</li>
                  <li>FECHA: eram quae fore amet</li>
                  <li>HORA: ipsum nulla anim malis</li>
                  <li>NOMBRE DEL SOLICITANTE: enim nulla cillum enim</li>
                  <li>DETALLES: quem quorum tempor irure</li>
                  <li>ESTADO DEL EVENTO: tempor quorum legam multos</li>
                  <li>ENCARGADO DE LA ACEPTACIÓN O RECHAZO DEL EVENTO: anim velit esse amet</li>
                </ul>

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
