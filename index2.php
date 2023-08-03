<!DOCTYPE html>
<html>
<head>
    <title>document</title>
</head>
<body>
    <h1>3.Pida al usuario dos pares de números  (x1, y1) y (x2, y2), que representen dos puntos en el plano. 
        Calcula y muestra la distancia entre ellos.</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="x1">x1:</label>
        <input type="number" id="x1" name="x1" required>
        <label for="y1">y1:</label>
        <input type="number" id="y1" name="y1" required>
        <br>
        <label for="x2">x2:</label>
        <input type="number" id="x2" name="x2" required>
        <label for="y2">y2:</label>
        <input type="number" id="y2" name="y2" required>
        <br>
        <button type="submit">Calcular Distancia</button>
    </form>

    <?php
    // Función para calcular la distancia entre dos puntos
    function calcularDistancia($x1, $y1, $x2, $y2) {
        $distancia = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
        return $distancia;
    }

    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x1 = $_POST["x1"];
        $y1 = $_POST["y1"];
        $x2 = $_POST["x2"];
        $y2 = $_POST["y2"];

        // Calcular la distancia y mostrar el resultado
        $distancia = calcularDistancia($x1, $y1, $x2, $y2);
        echo "<p>La distancia entre los puntos ($x1, $y1) y ($x2, $y2) es: $distancia</p>";
    }
    ?>
</body>
</html>
