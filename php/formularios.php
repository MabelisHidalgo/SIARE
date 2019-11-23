<?php include "db.php"; ?>
<?php
    //inicio de session
    session_start();

    if(isset($_POST['submit'])){
        $id = "5426";
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
        $usuario = "adm12";    //Tomar de session
        
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

    }
?>

