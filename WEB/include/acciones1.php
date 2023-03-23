<?php include"conexion.php";
if (isset($_post ['btn']) ) {
    $Nombre=$conecta->real_scape_string($_POST['Nombre']);
    $Apellidos=$conecta->real_scape_string($_POST['Apellidos']);
    $Direccion=$conecta->real_scape_string($_POST['Direccion']);
    $Telefono=$conecta->real_scape_string($_POST['Telefono']);
    $Fecha=$conecta->real_scape_string($_POST['Fecha']);
    $Email=$conecta->real_scape_string($_POST['Email']);

    if ($Nombre==""|| $Apellidos==""|| $Direccion=""|| $telefono=""|| $Fecha==""|| $Email="") {
        $Alerta="alguno de los datos esta vacios";
    }
    else {
        $Registro="insert into usuario(nombre, apellidos,Direccion,)"
    }
}