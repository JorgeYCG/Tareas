<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Registro</title>
</head>
<body>
    <div class="text-center">
    <img src="img/usuario.png" alt="logo" >
    </div>
<div class="Container m-0 Content-justify-center py-2" style="padding:8%;">
            <div class ="row text-center">
                <h1 class="text-ligh "style="background-color:#ff0000; " >Registro</h1>
               </div>
<form id="Registro" action="<?php echo $_Server['php_SELF'];?>" Method="post">
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="number" name="Telefono" class="form-control" placeholder="55-55-55-55-55" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="Email" name="Email" class="form-control" placeholder="Email" required>
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input class="form-checkbox" type="checkbox" role="switch" id="aviso" onclick="activar(this);" >
</div>
</div>
<div class="row text-center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="submit" id="registro"  name="registro" class="btn-ligh " Style="background-color:#ff0000"  >
</div>
</div>

  </body>
</html>
</form>
<script src="js/bootstrap.min.js"></script>
<script>
    //desabilitar el boton de registro
   document.getElementById('registro').disabled=true;
   function activar(cb){
    if (cb.checked){ 
    document.getElementById('registro').disabled=false;}
    else
    document.getElementById('registro').disabled=false;}
