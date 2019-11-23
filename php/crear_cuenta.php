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
        

         echo "<p>$nombre</p><br>";
         echo "<p>$apellido</p><br>";
         echo "<p>$cedula</p><br>";
         echo "<p>$correo</p><br>";
         echo "<p>$departamento</p><br>";
         echo "<p>$password</p><br>";
         echo "<p>$rep_password</p><br>";
      }
?>