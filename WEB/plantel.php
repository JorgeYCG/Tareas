<?php include "include/conexion.php";
       include "include/acciones2.php" ;?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Plantel</title>
</head>
<body>
    <div class="text-center">
    <img src="img/plantel.png" alt="logo" >
    </div>
    <div clas="Container m-0 Content-justify-Center py-2" style="padding:5%;">
            <div class ="row text-Center">
                <h1 class="text-ligh "style="background-color:#8000ff;">Registro del Plantel</h1>
    </div>
<form id="Registro" action="<?php echo $_Server['php_SELF'];?>" Method="post">
<div class="row text-Center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="nombre_p" class="form-control" placeholder="Nombre del Plantel" required>
</div>
</div>
<div class="row text-Center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="clave_p'" class="form-control" placeholder="clave plantel" required>
</div>
</div>
<div class="row text-Center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
    <input type="text" name="direccion" class="form-control" placeholder="Dirección" required>
</div>
</div>
<div class="row text-Center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="tel" name="telefono" class="form-control" placeholder="55-55-55-55-55" required>
</div>
</div>
<div class="row text-Center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="responsable" class="form-control" placeholder="Responsable." required>
</div>
</div>
<div class="row text-Center">
    <div class ="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="submit" value="registro" name="btn" class="btn-ligh " Style="background-color:#8000ff"   >
</div>
</div>
</form>
</body>
</html>