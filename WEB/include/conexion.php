<?php
    $SERVER="localhost";
    $user="root";
    $pass="";
    $bd="practicaslb";

    $conecta=new mysqli($SERVER,$user,$pass,$bd);
    if ($conecta->connect_errno) {
        die("La conexion a fallado" .$conecta->connect_errno);
    } 
?>