<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>4. Una tienda ofrece un descuento del 25% sobre el total de la compra y un cliente desea saber cuánto deberá pagar finalmente por su compra.</h1>

<form action="index3.php" method="post">
   <input type="number" placeholder="Digite el total de la compra" id="num1" name="num1" style="width: 300px;">
   <input type="number" placeholder="Digite el porcentaje de descuento" id="num2" name="num2" style="width: 300px;">

   <input type="submit" value="Calcular">

   <?php 
   function CalcularDescuento(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $resultado = $num1 * ($num2 / 100);
        $resultado1 = $num1 - $resultado;
        return [$resultado,$resultado1];
    } 
   } 
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   [$resultado,$resultado1] = CalcularDescuento();
   echo "El descuento es de = ".$resultado.", Su total a pagar es de = ".$resultado1;
   }
   ?>
   
   </form>
</html>