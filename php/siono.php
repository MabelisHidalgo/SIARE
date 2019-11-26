<?php 
    session_start();
    include "db.php";
    global $connection;
    $id = $_SESSION["id_pendiente"];
if(isset($_POST["Aceptar"])){
    $query = "UPDATE SOLICITUD SET EStado='aceptado' WHERE ID='$id'";
    mysqli_query($connection, $query);
    header('Location:../page/solicitud_pendiente.php');
}elseif(isset($_POST["Rechazar"])){
    $query = "UPDATE SOLICITUD SET EStado='rechazado' WHERE ID='$id'";
    mysqli_query($connection, $query);
    header('Location:../page/solicitud_pendiente.php');
}



?>