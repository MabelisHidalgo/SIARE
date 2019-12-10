<?php
if(isset($_POST["submit"])){
    $Tipo_Mob = array();
    $cantidad = array();

    $podium = $_POST["podium"];
    $bandera = $_POST["bandera"];
    $estandarte = $_POST["estandarte"];
    $tripode = $_POST["tripode"];
    $base_bordones = $_POST["base_bordones"];
    $tela_cercha = $_POST["tela_cercha"];








    if($podium <> ""){
        echo "<p>not empty</p><br>";
    }else{
        echo "<p>empty</p><br>";
    }
    

}




?>