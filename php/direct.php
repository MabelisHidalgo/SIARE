<?php include "db.php"; ?>
<?php
//inicio de sesion
  session_start();

 //validar datos
 	global $connection;
   	$correo=$_POST['email'];
   	$contra=$_POST['pass'];

   	$query = "SELECT ID, Departamento FROM USUARIOS WHERE Email = '$correo' and Password = '$contra'";
	$result = mysqli_query($connection, $query); 
	$row = mysqli_fetch_array($result, MYSQLI_NUM);

	
	
	$count = mysqli_num_rows($result);

	if($count == 1){
		$id_str = $row[0];
		$_SESSION["id"] = $id_str;
		$_SESSION["usuario"] = $row[1];
		$dep = substr($id_str, 0, 3);
		if($dep == "usr"){
			//dirige a la página de usuario
			header('Location:../page/calendarioprin.php');
		}else{
			//dirige a la página de admins
			header('Location:../page/solicitud_pendiente.php');
		}
	}else {
		header('Location:../index.html');
	}


?>
