<?php
if(isset($_POST['submit'])){
    $to = "lospinossanmiguel01@gmail.com"; 
    $subject = "Comentarios";
    $message =  $_POST['message'];

    mail($to,$subject,$message);
    
    //echo "Mensaje enviado con exito";
    header("Location:index.html");
    }
?>