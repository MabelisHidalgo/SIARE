
<?php include "../php/db.php"; ?>
<?php include "funciones.php";  ?>
<?php include "redirect.php";  ?>
<?php 
$_SESSION["prensa"] = false;
//$_SESSION["solicitud_actual"] = "8JEo0qpQm"; 
if(isset($_POST['submit'])){
    global $connection;
    $cob_Perioditica = $_POST["periodistica"]; 
    $fotografia = $_POST["fotografia"];
    $filmacion = $_POST["filmacion"];
    $divulgacion = $_POST["divulgacion"];
    $redes = $_POST["redes"];
    $sonido = $_POST["sonido"];
    $entrevista = $_POST["entrevista"];
    $id = strval(rand(10000,99999));

    $query = "INSERT INTO SOLICITUD_PRENSA(ID, Cob_Periodistica, Fotografia, film, Web , Redes, Equipo_Sonido, Entrevista, Estado)";
    $query .= "VALUES ('$id', '$cob_Perioditica', '$fotografia', '$filmacion', '$divulgacion', '$redes', '$sonido', '$entrevista', 'pendiente')";
    
    $result = mysqli_query($connection, $query);

    $solicitud_actual = $_SESSION["solicitud_actual"];

    $query2 = "UPDATE SOLICITUD SET Form_Prensa = '$id' WHERE ID='$solicitud_actual'";
    $result2 = mysqli_query($connection, $query2);


    $direct = donde();
    header('Location:../page/'.$direct);

}






?>