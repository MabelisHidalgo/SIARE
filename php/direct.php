<?php
//inicio de sesion
  session_start();

 //validar datos
   $correo=$_POST['email'];
   $contra=$_POST['pass'];

 //direccionamiento
   if($correo=="adm@utp.ac.pa" && $contra=="admin1")
   	 {
   	 	$_SESSION["x"]=1;
   	 	$_SESSION["email"]=$correo;
   	 	header('Location:../page/solicitud_pendiente.html');

   	 }
   	 elseif ($correo=="usuario@utp.ac.pa" && $contra=="usuario1") 
   	 {
   	 	$_SESSION["x"]=2;
   	 	$_SESSION["email"]=$correo;
   	 	header('Location:../page/calendarioprin.html');
   	 }
   	 else{
   	 	header('Location:../index.html');
   	 }
