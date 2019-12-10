<?php include "../php/db.php";  ?>
<?php
  session_start();
  global $connection;
  $usuario = $_SESSION["id"];
  $query = "SELECT Email, Nombre, Apellido, Cedula, Departamento FROM USUARIOS WHERE ID = '$usuario'";
  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_assoc($result);
  $email =  $row['Email'];
  $nombre = $row['Nombre'];
  $apellido = $row['Apellido'];
  $cedula = $row['Cedula'];
  $departamento = $row['Departamento'];

  $nombre .= " ". $apellido;




?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--font-->
    <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
<!-- CSS -->
    <link href="../css/esqueleto.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/standard.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

	<title>Cuenta Personal</title>

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
<!----------------------------CONTENIDO-------------------------->
    <br>
    <h3>Perfil</h3>
    <br>
      <div class="container">
        <div class="col-12">
           <div class="text-center" id="bordeCustom">
              <img src="../img/usuario.png" id="fotoperfil" >
              <!--CAMBIANDO FOTO DE PERFIL-->
                  <!--CAMBIANDO FOTO DE PERFIL-->
                    <form class="col-12 my-2" action="#">
                      <input  type="file" name="pic" accept="image/*">
                      <br><br>
                      <input class="btn btn-primary custom-btn" type="submit" value="Cambiar Imagen">
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

<!------------------------------INICIO DEL FOOTER------------------------------>
<?php include "../page/Includes/footer.php"; ?>
<!-- JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<!-- JS -->
</body>
</html>
