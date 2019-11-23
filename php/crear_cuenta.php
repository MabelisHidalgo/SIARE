<?php include "db.php"; ?>
<?php include "funciones.php"; ?>
<?php

if(isset($_POST["submit"]))
      { 
         //datos para la cuenta 
         $nombre=$_POST["nombre"];
         $apellido=$_POST["apellido"];
         $cedula = $_POST["cedula"];
         $correo=$_POST["correo"];
         $departamento = $_POST["departamento"];
         $password=$_POST["contra"];
         $rep_password=$_POST["ver_contra"];
        
        Crear_Datos($nombre, $apellido, $cedula, $correo, $departamento, $password, $rep_password);
      }
?>