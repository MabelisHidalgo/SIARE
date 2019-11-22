<?php include "db.php"; ?>
<?php
    //inicio de session
    session_start();

    if(isset($_POST['submit'])){
        $lugar = $_POST['Lugar'];
        $fecha = $_POST['fecha'];
        $entrada = $_POST['horaEntrada'];
        $salida = $_POST['horaSalida'];
        $nombreEvento = $_POST['nombreEvento'];
        $descripcion = $_POST['descripcion'];
        $asistencia = $_POST['personas'];
        

        echo "<p>$lugar</p> <br>";
        echo "<p>$fecha</p> <br>"; 
        echo "<p>$entrada</p> <br>";   
        echo "<p>$salida</p> <br>";  
        echo "<p>$nombreEvento</p> <br>";   
        echo "<p>$descripcion</p> <br>";   
        echo "<p>$asistencia</p> <br>";   

    }
?>

