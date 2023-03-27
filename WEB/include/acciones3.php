<?php include "conexion.php";
if (isset($_post ['btn']) ) {
    $Nombre_L=$conecta->real_scape_string($_POST['nombre_L']);
    $Descripcion=$conecta->real_scape_string($_POST['descripcion']);
    $Tel_L=$conecta->real_scape_string($_POST['tel_L']);
    $Email=$conecta->real_scape_string($_POST['email']);
    $Facebook=$conecta->real_scape_string($_POST['facebook']);
    $Horario=$conecta->real_scape_string($_POST['horario']);

    if ($Nombre_L==""|| $Descripcion==""|| $Tel_L=""|| $Email=""|| $Facebook==""|| $Horario="") {
        $Alerta="alguno de los datos esta vacios";
    }
    else {
        $Registro="INSERT INTO `lugares`(`Id_lugares`, `nombre_L`, `descripcion`, `tel_L`, `email`, `facebook`, `horario`) VALUES(´$Nombre_L´,´$Descripcion´,´$Tel_L´,´$Email´,´$Facebook´,´$Horario´)";
        $Registro=$conecta->query($Registro);
        if ($Registro>0) {
            echo "Registro exitoso";
        }
        else {
            echo "entrar al registro";
        }
    }
}
?>