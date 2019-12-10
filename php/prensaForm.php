
<?php include "../php/db.php"; ?>
<?php include "funciones.php";  ?>
<?php 

if(isset($_POST['submit'])){
    global $connection;
    $cob_Perioditica = generarNull($_POST["periodistica"]); 
    echo strlen($_POST["periodistica"]);
    $fotografia = generarNull($_POST["fotografia"]);
    $filmacion = generarNull($_POST["filmacion"]);
    $divulgacion = generarNull($_POST["divulgacion"]);
    $redes = generarNull($_POST["redes"]);
    $sonido = generarNull($_POST["sonido"]);
    $entrevista = generarNull($_POST["entrevista"]);
    $id = strval(rand(10000,99999));

    $query = "INSERT INTO SOLICITUD_PRENSA(ID, Cob_Periodistica, Fotografia, film, Web , Redes, Equipo_Sonido, Entrevista, Estado)";
    $query .= "VALUES ('$id', '$cob_Perioditica', '$fotografia', '$filmacion', '$divulgacion', '$redes', '$sonido', '$entrevista', 'pendiente')";
    
    $result = mysqli_query($connection, $query);
    
}






?>