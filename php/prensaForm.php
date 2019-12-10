<?php session_start(); ?>
<?php include "../php/db.php"; ?>
<?php 

if(isset($_POST['submit'])){
    $cob_Perioditica = $_POST["periodistica"];
    $fotografia = $_POST["fotografia"];
    $filmacion = $_POST["filmacion"];
    $divulgacion = $_POST["divulgacion"];
    $redes = $_POST["redes"];
    $sonido = $_POST["sonido"];
    $entrevista = $_POST["entrevista"];

    echo "<p>$cob_Perioditica</p> <br>";
    echo "<p>$fotografia</p> <br>";
    echo "<p>$filmacion</p> <br>";
    echo "<p>$divulgacion</p> <br>";
    echo "<p>$redes</p> <br>";
    echo "<p>$sonido</p> <br>";
    echo "<p>$entrevista</p> <br>";
}



?>