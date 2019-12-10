<?php include "db.php"; ?>
<?php include "funciones.php"; ?>
<?php
    //inicio de session
    session_start();
    $_SESSION["solicitud_actual"] = "";

    if(isset($_POST['submit'])){
        $id = generateRandomString();
        $lugar = $_POST['Lugar'];
        $fecha = $_POST['fecha'];
        $entrada = $_POST['horaEntrada'];
        $salida = $_POST['horaSalida'];
        $nombreEvento = $_POST['nombreEvento'];
        $descripcion = $_POST['descripcion'];
        $asistencia = $_POST['personas'];
        $formPrensa = NULL;     //Hacer dinámico
        $formMobiliario = NULL; //Hacer dinámico
        $estado = "pendiente";  //hacer dinámico
        $usuario = $_SESSION["id"];    //Tomar de session
        
        $lugar = mysqli_real_escape_string($connection,$lugar);
        $nombreEvento = mysqli_real_escape_string($connection,$nombreEvento);
        $descripcion = mysqli_real_escape_string($connection,$descripcion);
        $estado = mysqli_real_escape_string($connection,$estado);


        //TESTING connection
        /*if($connection){
            echo "we are connected";
        }else{
            die("Database connection failed");
        }*/

        //query que carga los datos a la bd
        $query = "INSERT INTO SOLICITUD(ID, Lugar, Fecha, Hora_Inicio, Hora_fin, Nombre_Evento, Description, Asistencia, Estado, Form_Prensa, Form_Mob, UsuarioID)";
        $query .= "VALUES ('$id', '$lugar', '$fecha', '$entrada', '$salida', '$nombreEvento', '$descripcion', $asistencia, '$estado', NULL, NULL, '$usuario')";
        
        $result = mysqli_query($connection, $query);
        $_SESSION["solicitud_actual"] = $id;

        header('Location:../page/calendarioprin.php');


    }
?>

