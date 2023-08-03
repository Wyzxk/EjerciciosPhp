<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>6.Un vendedor recibe un sueldo base más un 10% extra por comisión de sus ventas, 
    el vendedor desea saber cuánto dinero obtendrá por concepto de comisiones por las 
    tres ventas que realiza en el mes y el total que recibirá en el mes tomando en cuenta su sueldo base y comisiones</h1>

<form action="index5.php" method="post">
   <input type="number" placeholder="Escribe el valor de la primer venta" id="num1" name="num1" style="width: 300px;">
   <input type="number" placeholder="Escribe el valor de la segunda venta" id="num2" name="num2" style="width: 300px;">
   <input type="number" placeholder="Escribe el valor de la tercera venta" id="num3" name="num3" style="width: 300px;">

   <input type="submit" value="Calcular">

   <?php 
   $sueldo = 1000;
   function CalcularComisiones(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $comisionesPorcent = 10;
        $comisiones = $num1 + $num2 + $num3;
        $resultado = $comisiones * ($comisionesPorcent / 100);
        return $resultado;
    } 
   } 
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $resultado = CalcularComisiones();
   $total = $sueldo + $resultado;
   echo "Tu sueldo es de:".$sueldo.". lo que ganaste en comisiones es de: ".$resultado.". Para un total de: ".$total;
   }
   ?>
   
   </form>
</html>