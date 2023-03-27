<?php include "conexion.php";
if (isset($_post ['btn']) ) {
    $Nombre_P=$conecta->real_scape_string($_POST['nombre_p']);
    $Clave=$conecta->real_scape_string($_POST['clave_p']);
    $Direccion_p=$conecta->real_scape_string($_POST['direccion_p']);
    $Tel_p=$conecta->real_scape_string($_POST['tel_p']);
    $Responsable=$conecta->real_scape_string($_POST['responsable']);

    if ($Nombre_p==""|| $Clave_p==""|| $Direccion_p=""|| $Tel_p=""|| $Fecha=="") {
        $Alerta="alguno de los datos esta vacios";
    }
    else {
        $Registro="INSERT INTO `plantel`(`id_plantel`, `nombre_p`, `clave_p`, `dirección_p`, `tel_p`, `responsable`) VALUES(´$Nombre_p´,´$Clave_p´,´$Direccion_p´,´$Tel_p´,´$Responsable´)";
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