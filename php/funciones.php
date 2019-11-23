<?php include "db.php"; ?>
<?php

    function Crear_Datos($nombre, $apellido, $cedula, $correo, $departamento, $password, $rep_password){

        $id = "abc24";
        global $connection;
        $nombre = mysqli_real_escape_string($connection,$nombre);
        $correo = mysqli_real_escape_string($connection,$correo);
        $apellido = mysqli_real_escape_string($connection,$apellido);
        $cedula = mysqli_real_escape_string($connection,$cedula);
        $departamento = mysqli_real_escape_string($connection,$departamento);
        $password = mysqli_real_escape_string($connection,$password);
        $rep_password = mysqli_real_escape_string($connection,$rep_password);

        //TESTING connection
        /*if($connection){
            echo "we are connected";
        }else{
            die("Database connection failed");
        }*/

        if($password!=$rep_password){
            echo "asegurese de que las contraseñas son iguales";
        }elseif(strlen($password)<5){
            echo "La cantidad de caracteres es muy baja, intente una contraseña mas larga";
        }else{
            $query = "INSERT INTO USUARIOS (ID, Email, Nombre, Apellido, Cedula, Departamento, Password)";
            $query .= "VALUES ('$id', '$correo', '$nombre', '$apellido', '$cedula', '$departamento', '$password')";
            $result = mysqli_query($connection, $query);
        }
            
    }



?>