

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
     <link rel="stylesheet" type="text/css" href="../css/formprensa.css">

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


    <!-- inicio de barra de navegacion -->
    <?php include "../page/Includes/navbar.php"; ?>
         <!-- Fin Barra de navegacion -->
     <br><br>
     <h3>Solicitud de Prensa y Audiovisual</h3>
     <br>
     <div class="container">
          <div class="col-12">
               <div class="boxfrm2">
                     <!--Formulario-->
                     <form method="POST" action="../php/prensaForm.php">
                         <!--Campo 1 y 2 -->
                         <div class="col-12">
                             <h4>Cobertura periodistica:</h4><br>
                             <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí" name="periodistica"></textarea>
                         </div>
                         <hr>
                         <div class="col-12">
                             <h4>Fotografia:</h4><br>
                             <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí" name="fotografia"></textarea>
                         </div>
                         <hr>
                         <h4>Filmación:</h4> <br>
                         <div class="col-12">
                         <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí" name="filmacion"></textarea>
                        <hr>
                        <h4>Divulgación en web de la UTP</h4><br>
                        <div class="col-12">
                             <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí" name="divulgacion"></textarea>
                         </div>
                         <hr>
                         <h4>Redes Sociales</h4> <br>
                         <div class="col-12">
                         <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí" name="redes"></textarea>
                         <hr>
                         <h4>Equipo de Sonido</h4> <br>
                         <div class="col-12">
                         <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí" name="sonido"></textarea>
                             <hr>
                         <h4>Entrevista en los medios de comunicación social</h4> <br>
                         <div class="col-12">
                         <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí" name="entrevista"></textarea>
                             </div>
                             <br>
                             <div class="row text-center">
                            <div class="col-sm-12">
                              <input class="btn btn-primary custom-btn" type="submit" name="submit" value="Enviar Solicitud">
                            </div>
                            </div>

                          </div>
                           </div>
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