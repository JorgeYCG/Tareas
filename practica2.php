<?php
error_reporting(0);
if (isset($_POST['btn'])){
$numero1=$_POST['caja1'];
$numero2=$_POST['caja2'];
$numero1=(int)$numero1;
$numero2=(int)$numero2;
$resultado = $numero1 + $numero2;
$valor = $resultado;
echo $valor;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Practica 2</title>
</head>
<body>
   <div class="col-lg-12">
    <div class="row">
        <h1 class="text-center">Sumas</h1>
   </div> 
   <div  class="row">
    <form action="<?php echo $SERVER[PHP_SELF];?>"
    metod="post">
    <input type ="Text" name="caja1" required>
    <input type ="Text" name="caja2" required>
    <input type ="Text" name="resultado" value>
    <?php echo $valor?>;
    <input type="submit" value="calcular" name="btn">
    
    </body>
</html>