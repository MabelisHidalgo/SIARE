<!DOCTYPE html>
<html lang="en">
  <head>
<!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/esqueleto.css">
    <link rel="stylesheet" href="../css/standard.css">
    <link rel="stylesheet" href="../css/estadistica.css">

    <title>Estadísticas</title>
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
<?php include "../page/Includes/navbarAdm.php"; ?>
<!-- Fin Barra de navegacion -->

  <!-----------------MENÚ DESPLEGABLE------------------>
  <div class="container-fluid mx-4 pt-4">
    <select action="page.php" method="POST" name="opciones" id="opCuadro">
          <option value="Mensual">Mensual</option>
          <option value="Semanal">Semanal</option>
          <option value="Por Lugar">Por Lugar</option>
    </select>
  </div>
    <!-------------INSERCIÓN DE LA GRÁFICA------------->
<div class="container">

    <section class="charts">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="chart-container">
              <h3>Eventos del Lobby</h3>
              <canvas id="myChart"></canvas>
            </div>
          </div>
          <div class="col-md-6">
            <div class="chart-container">
              <h3>Eventos del Auditorio</h3>
              <canvas id="myChart2"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>

<!--FIN DEL GRÁFICO->

<!--<div class="container bg-info" id="fondoSol">

    <div class="progress" style="left: 3%;">
          <div class="progress-bar bg-success" role="progressbar" style="height: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">30%
          </div>
    </div>

    <div class="progress" style="left: 8%;">
          <div class="progress-bar bg-danger" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
          </div>
    </div>

    <div class="progress" style="left: 17%;">
          <div class="progress-bar bg-secondary" role="progressbar" style="height: 87%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">87%
          </div>
    </div>

    <div class="progress" style="left: 26%;">
      <div class="progress-bar bg-primary" role="progressbar" style="height: 63%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">63%
      </div>
    </div>

    <div class="progress" style="left: 35%;">
          <div class="progress-bar bg-dark" role="progressbar" style="height: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%
          </div>
    </div>

    <div class="progress" style="left: 44%;">
          <div class="progress-bar bg-secondary" role="progressbar" style="height: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%
          </div>
    </div>

    <div class="progress" style="left: 53%;">
          <div class="progress-bar bg-warning" role="progressbar" style="height: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">98%
          </div>
    </div>

    <div class="progress" style="left: 62%;">
          <div class="progress-bar bg-success" role="progressbar" style="height: 28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">28%
          </div>
    </div>

    <div class="progress" style="left: 71%;">
          <div class="progress-bar bg-primary" role="progressbar" style="height: 44%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">44%
          </div>
    </div>

    <div class="progress" style="left: 80%;">
          <div class="progress-bar bg-warning" role="progressbar" style="height: 56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">56%
          </div>
    </div>

    <div class="progress" style="left: 89%;">
          <div class="progress-bar bg-dark" role="progressbar" style="height: 81%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">81%
          </div>
    </div>

    <div class="progress" style="left: 95%;">
          <div class="progress-bar bg-danger" role="progressbar" style="height: 16%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">16%
          </div>
    </div>
</div>
    <p class="container bg-warning" id="t2">Enero, Febrero, marzo, Abrir, Mayo...</p>

</body>-->
<!-- Footer -->
<?php include "../page/Includes/footer.php"; ?>
<!-- Footer -->

<!-- JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!------- JS PARA LA PANTALLA DE ESTADISTICA ----------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    <script src='http://code.jquery.com/jquery-latest.js'></script>
    <script src="../js/estadistica.js"></script>
<!-- JS -->
  </body>
</html>

<!------------------------------->
