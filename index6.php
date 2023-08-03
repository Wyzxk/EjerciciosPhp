<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>7.Un alumno desea saber cuál será su promedio general en las tres materias mas difíciles que cursa y cuál
     será el promedio que obtendrá en cada una de ellas. </h1>

<form action="index6.php" method="post">
   <input type="text" placeholder="Escribe el nombre de la materia" id="num1" name="num1" style="width: 300px;">
   <input type="number" placeholder="Escribe la calificación del examen" id="num2" name="num2" style="width: 300px;">
   <input type="number" placeholder="Escribe la calificación de la primer tarea" id="num3" name="num3" style="width: 300px;">
   <input type="number" placeholder="Escribe la calificación de la segunda tarea" id="num4" name="num4" style="width: 300px;">
   <input type="number" placeholder="Escribe la calificación de la tercera tarea" id="num5" name="num5" style="width: 300px;">

   <input type="submit" value="Calcular">

   <?php 
function CalcularArea(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];
        $num5 = $_POST["num5"];
        if ($num1 == "matemáticas"){
            $promedioT = ($num3 + $num4 + $num5) / 3;
            $resultadoM = ($num2 * 0.9) + ($promedioT * 0.1);
            return $resultadoM;
        }else if($num1 == "fisica"){
            $promedioTT = ($num3 + $num4) / 2;
            $resultadoF = ($num2 * 0.8) + ($promedioTT * 0.2);
            return $resultadoF;
        }else if($num1 == "quimica"){
            $promedioTTT = ($num3 + $num4 + $num5) / 3;
            $resultadoQ = ($num2 * 0.85) + ($promedioTTT * 0.15);
            return $resultadoQ;
        }
    }
    return null;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1 = CalcularArea();
    if ($n1 !== null) {
        echo "El valor es: " . $n1;
    }else{
        echo "No se pudo realizar el cálculo, verifique si colocó todos los datos";
    }
}
?>

   
   </form>
</html>