<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>2. Realiza un programa que calcule el perímetro y área de un rectángulo dada su base y su altura.</h1>

<form action="index1.php" method="post">
   <input type="number" placeholder="Escribe la base de tu rectangulo" id="num1" name="num1" style="width: 300px;">
   <input type="number" placeholder="Escribe la altura de tu rectangulo" id="num2" name="num2" style="width: 300px;">

   <input type="submit" value="Calcular">

   <?php 
   function CalcularPyA(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $resultadoPeri = $num1 + $num1 + $num2 + $num2;
        $resultadoArea = $num1 * $num2;
        return array($resultadoPeri,$resultadoArea);
    } 
   } 
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   list($resultadoPeri,$resultadoArea) = CalcularPyA();
   echo "El perimetro es = ".$resultadoPeri.", El area es = ".$resultadoArea;
   }
   ?>
   
   </form>
</html>