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
     <link rel="stylesheet" type="text/css" href="../css/formmobiliario.css">

    <title>Solicitud de Mobiliario</title>
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
         <?php include "../page/Includes/navbar.php"; ?>
         <!-- Fin Barra de navegacion --> 
             <br><br>
      <h3>Solicitud de Espacio</h3>
      <br>
      <div class="container">
        <div class="clas-col-12">
          <div class="boxfrm2">
            <!--Formulario-->
              <form method="POST">
                <!-- Campo-->
                  <h4>Presentación</h4>
                  <br>
                    <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Podium: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Bandera: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Estandarte UTP: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <br>
                         <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Tripodes: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Bases y bordones: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Telas para cerchas: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <hr>
                         <h4>Mesas</h4>
                         <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Cuadradas pequeñas(35x35 pulg):
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Rectangulares Medianas (72x30 pulg): 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Rectangulares grandes: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <br>
                         <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Rectangulares (6 puestos):
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Rectangulares (10 puestos): 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Cocteleras: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <hr>
                         <!-- Campo-->
                         <h4>Cubrimientos</h4>
                         <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Manteles:
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Manteles pollera: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                             
                             <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Manteles licra: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <br>
                         <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Manteles cocteleros:
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Cubierta blanca para sillas: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                             
                             <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Cubierta de colores para sillas: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <hr>
                         <!--Campo -->
                         <h4>Equipo de café / té</h4>
                         <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Cafetera(30 tazas):
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                             <br>
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Cafetera(100 tazas): 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                             <br>
                             <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Tetera(30 tazas): 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <br>
                         <div class="row">
                            <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Tetera(100 tazas): 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>

                             </div>
                         </div>
                         <hr>
                         <!-- Campo-->
                         <h4>Varios</h4>
                         <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Sillas Acolchadas:
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Sillas plasticas: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Tinas: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <br>
                         <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Tolda pequeña:
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Tolda mediana: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>

                             <div class="col-md-4">
                               <div class="row">
                                    <div class="col-md-4">
                                        Tolda grande: 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <br>
                         <div class="row">
                             <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        Cerchas de aluminio:
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="datos2" name="" min="1"><br>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <hr>
                         <div class="row text-center">
                            <div class="col-sm-12">
                              <input  class="btn btn-primary custom-btn" type="submit" name="" value="Enviar Solicitud">
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