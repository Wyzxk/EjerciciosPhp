<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>1. Pedir el radio de un círculo y calcular su área. A=PI*r^2</h1>

<form action="index.php" method="post">
   <input type="number" placeholder="Escribe el radio de tu circulo" id="num1" name="num1" style="width: 300px;">
   <input type="submit" value="Calcular">

   <?php 
   function CalcularArea(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $PI = 3.14159265359;
        $num1 = $_POST["num1"];
        $resultado = $PI * $num1 ** 2;
        return $resultado;
    } 
   } 
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $resultado = CalcularArea();
   echo $resultado;
   }
   ?>
   
   </form>
</html>