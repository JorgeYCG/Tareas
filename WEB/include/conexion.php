<?php
error_reporting(0);
    $SERVER="localhost";
    $user="root";
    $pass="";
    $bd="practicaslb";
    $conecta=mysqli_connect($SERVER,$user,$pass,$bd);
    if ($conecta->connect_error){
        die("La conexion a fallado" .$conecta->connect_error);
    } 
?>