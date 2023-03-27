<?php include "conexion.php";
if (isset($_post ['btn']) ) {
    $Nombre=$conecta->real_scape_string($_POST['']);
    $Apellidos=$conecta->real_scape_string($_POST['Apellidos']);
    $Direccion=$conecta->real_scape_string($_POST['Direccion']);
    $Telefono=$conecta->real_scape_string($_POST['Telefono']);
    $Fecha=$conecta->real_scape_string($_POST['Fecha']);
    $Email=$conecta->real_scape_string($_POST['Email']);

    if ($Nombre==""|| $Apellidos==""|| $Direccion=""|| $Telefono=""|| $Fecha==""|| $Email="") {
        $Alerta="alguno de los datos esta vacios";
    }
    else {
        $Registro="INSERT INTO `usuario`(`Id_usuario`, `nombre`, `apellidos`, `direccion`, `telefono`, `fecha_N`, `email_u`) VALUES (´$Nombre´,´$Apellidos´,´$Direccion´,´$Telefono´,´$Fecha´,´$Email´)";
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