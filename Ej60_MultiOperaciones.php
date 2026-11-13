<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Multioperaciones</title>
</head>
<body>

<h2>Captura de datos para los arreglos</h2>

<form method="POST" action="">

    <h3>Numeros 1</h3>
    <input type="number" name="n1_0" required>
    <input type="number" name="n1_1" required>
    <input type="number" name="n1_2" required>

    <h3>Numeros 2</h3>
    <input type="number" name="n2_0" required>
    <input type="number" name="n2_1" required>
    <input type="number" name="n2_2" required>

    <br><br>
    <button type="submit" name="botonCalcular">Calcular</button>

</form>

<?php

if (isset($_POST['botonCalcular'])) {
    $Numeros1=array($_POST['n1_0'], $_POST['n1_1'], $_POST['n1_2']);
    $Numeros2=array($_POST['n2_0'], $_POST['n2_1'], $_POST['n2_2']);

$Suma=array();
$Resta=array();
$Multiplicacion=array();
$Division=array();

for ($i=0; $i<3; $i++) {

    $Suma[$i]=$Numeros1[$i] + $Numeros2[$i];
    $Resta[$i]=$Numeros1[$i] - $Numeros2[$i];
    $Multiplicacion[$i]=$Numeros1[$i] * $Numeros2[$i];

    if ($Numeros2[$i] != 0) {
        $Division[$i]=round($Numeros1[$i] / $Numeros2[$i], 2);
    } else {
        $Division[$i]="No se puede dividir entre 0";
    }
}

echo "<br>";
echo "<table border='1'>";

echo "<tr>
        <th>Numeros1</th>
        <th>Numeros2</th>
        <th>Suma</th>
        <th>Resta</th>
        <th>Multiplicacion</th>
        <th>Division</th>
      </tr>";

for ($i=0; $i<3; $i++) {

    echo "<tr>";
    echo "<td>" . $Numeros1[$i] . "</td>";
    echo "<td>" . $Numeros2[$i] . "</td>";
    echo "<td>" . $Suma[$i] . "</td>";
    echo "<td>" . $Resta[$i] . "</td>";
    echo "<td>" . $Multiplicacion[$i] . "</td>";
    echo "<td>" . $Division[$i] . "</td>";
    echo "</tr>";
}

echo "</table>";

}

?>

</body>
</html>