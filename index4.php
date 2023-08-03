<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>5. Suponga que un individuo desea invertir su capital en un banco y desea saber cuanto 
    dinero ganará después de un mes si el banco paga a razón de 2% mensual</h1>

<form action="index4.php" method="post">
   <input type="number" placeholder="Digite el total de su capital invertida" id="num1" name="num1" style="width: 300px;">
   <input type="number" placeholder="Digite los meses que han transcurrido" id="num2" name="num2" style="width: 300px;">

   <input type="submit" value="Calcular">

   <?php 
   function CalcularCapital(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        for ($i = 1; $i <= $num2; $i++) {
            $num1*= 1.02;
            echo " El mes: ".$i." tienes: ".number_format($num1,2);
        }
    
        return $num1;  
    } 
   } 
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $resultado = CalcularCapital();
   }
   ?>
   
   </form>
</html>