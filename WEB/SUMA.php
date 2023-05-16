<?php
error_reporting(0);
if (isset($_POST['btn'])){
$numero1=$_POST['caja1'];
$numero2=$_POST['caja2'];
$numero1=(int)$numero1;
$numero2=(int)$numero2;
$resultado = $numero1 + $numero2;
$valor = $resultado;


}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <title>Practica 2</title>
</head>
<body>
    <script src="js/bootstrap.min.js"></script>
   <div class="col-lg-12">
    <div class="row">
        <h1 class="text-center">Sumas</h1>
   </div> 
   <div  class="row">
    <form action=""    method="post"  class="text-center">
    <input type ="number" name="caja1" placeholder="primer numero" required>
    <input type ="number" name="caja2" placeholder="segundo numero" required>
    <input type="submit" value="calcular" name="btn">
    
    <h1>El resultado es= <?php echo $valor?></h1>
    </body>
</html>