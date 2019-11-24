<?php include "../php/db.php";  ?>
<?php
global $connection;
  $query = "SELECT Email, Nombre, Apellido, Cedula, Departamento FROM USUARIOS WHERE ID = 'mob14698'";
  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_assoc($result);
  $email =  $row['Email'];
  $nombre = $row['Nombre'];
  $apellido = $row['Apellido'];
  $cedula = $row['Cedula'];
  $departamento = $row['Departamento'];

  $nombre .= $apellido;




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
     <link rel="stylesheet" type="text/css" href="../css/profile.css">

    <title>Perfil</title>
  </head>

  <body>
    <!--header-->
      <header>
         <div class="container text-center py-3">
             <div class="col-sm-12">
                 <img src="../img/logo_utp.png" class="logoutp">
                 <h4>Universidad Tecnolgica de Panamá</h4>
                 <h5>Sistema para la Reservación de Eventos Academicos</h5>
             </div>
         </div>
      </header>
     <!-- Inicio Barra de navegacion -->
      <section>
             <nav class="navbar navbar-expand-lg navbar-dark  py-3">
                 <a class="navbar-brand" href="#">-SIARE-</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="../page/calendarioprin.html">Calendario<span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Formularios
                                </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="../page/formlugar.html">Formulario Principal</a>
                                       <a class="dropdown-item" href="../page/formmobiliario.html">Formulario Mobiliario</a>
                                       <a class="dropdown-item" href="../page/formprensa.html">Formulario Prensa</a>
                                  </div>
                               </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="../page/solicitud.html">Informacion de Solicitudes</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="../page/profile.html">Perfil</a>
                              </li>
                         </ul>
                         
                            <button class="btn btn-primary btn-sm custom-btn">
                              <a class="nav-link text-white" href="../php/cerrar.php">Cerrar Sesión</a>
                             </button>
                   </div>
                   </div>
             </nav>
      </section>
<!-- Fin Barra de navegacion -->
      <br>
      <h3>Perfil</h3>
      <br>
        <div class="container">
          <div class="col-12">
             <div class="box text-center">
                <img src="../img/usuario.png" id="fotoperfil" >
                <!--CAMBIANDO FOTO DE PERFIL-->
                    <form class="my-2" action="#">
                      <input type="file" name="pic" accept="image/*">
                      <input type="submit" value="Cambiar Imagen">
                    </form>
                <br>
                <button class="btn btn-primary custom-btn">Editar perfil</button>
                <br><br>
                <button class="btn btn-primary custom-btn ">Cambiar Contraseña</button>
                <br>
                <hr>
                  <h4>Información Personal</h4>
                     <b>Nombre: <?php echo "<b>$nombre</b>"; ?></b><br><br>
                     <b>Cédula: <?php echo "<b>$cedula</b>"; ?></b><br><br>
                     <b>Correo: <?php echo "<b>$email</b>"; ?></b><br><br>
                     <b>Departamento: <?php echo "<b>$departamento</b>"; ?></b><br>
             </div>
          </div>
        </div>

     <footer class="page-footer font-small pt-4">
         <!-- Footer Elements -->
         <div class="container">
         </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
         <div class="footer-copyright text-center ">© 2019 Copyright
           <br><a href="">--------</a>
         </div>
        <!-- Copyright -->
     </footer>

<!-- Footer -->

<!-- JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<!-- JS -->
  </body>
</html>
