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
                     <form method="POST">
                         <!--Campo 1 y 2 -->
                         <div class="col-12">
                             <h4>Cobertura periodistica:</h4><br>
                             <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí"></textarea>
                         </div>
                         <hr>
                         <div class="col-12">
                             <h4>Fotografia:</h4><br>
                             <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí"></textarea>
                         </div>
                         <hr>
                         <h4>Filmación:</h4> <br>
                         <div class="col-12">
                             <div class="row">
                                   <div class="col-6">
                                       Videoconferencia Transmición
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                    <div class="col-6">
                                       Videoconferencia Grabación
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                    <div class="col-6">
                                       Entrevista
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div> 
                             </div>
                        <hr>
                        <h4>Divulgación en web de la UTP</h4><br>
                        <div class="col-12">
                             <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí"></textarea>
                         </div>
                         <hr>
                         <h4>Redes Sociales</h4> <br>
                         <div class="col-12">
                             <div class="row">
                                   <div class="col-6">
                                       Facebook
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                    <div class="col-6">
                                       Instagram
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                    <div class="col-6">
                                       Twitter
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                   <div class="col-6">
                                       otros
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                   <div class="col-12">
                                       <br>
                                       <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí"></textarea>
                                   </div>
                             </div>
                         <hr>
                         <h4>Equipo de Sonido</h4> <br>
                         <div class="col-12">
                             <div class="row">
                                   <div class="col-6">
                                       Microfono
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                    <div class="col-6">
                                       Bocinas
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                    <div class="col-6">
                                       Amplificador
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                   <div class="col-6">
                                       Pedestales
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                   <div class="col-6">
                                       Sonido para videoconferencia
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                   <br>
                                   <div class="col-12">
                                       <br>
                                       <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí"></textarea>
                                   </div>   
                             </div>
                             <hr>
                         <h4>Entrevista en los medios de comunicación social</h4> <br>
                         <div class="col-12">
                             <div class="row">
                                   <div class="col-6">
                                       TV
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                    <div class="col-6">
                                       Radio
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                    <div class="col-6">
                                       Periodico
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                   <div class="col-6">
                                       Publicidad
                                   </div>
                                   <div class="col-6">
                                       <input type="checkbox" name="">
                                   </div>
                                <br>
                                   <div class="col-12">
                                       <br>
                                       <textarea id="t1t2" rows="3" cols="75" placeholder="comentarios aquí"></textarea>
                                   </div>
                             </div>
                             <br>
                             <div class="row text-center">
                            <div class="col-sm-12">
                              <input class="btn btn-primary custom-btn" type="submit" name="" value="Enviar Solicitud">
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