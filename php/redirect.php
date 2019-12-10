<?php
 session_start();

 function donde(){
    $mob = $_SESSION["mobiliario"];
    $pre = $_SESSION["prensa"];

    if($pre){
        return 'formprensa.php';
    }elseif($mob){
        return 'formmobiliario.php';
    }else{
        return 'calendarioprin.php';
    }
 }
?>