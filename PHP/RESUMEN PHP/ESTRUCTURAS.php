<!--EJERCICIO03-->

<!--
Con la función "rand" devuelva un valor entre 1 y 10. Si el valor es menor que 5 debe mostrar el mensaje "El valor .... 
es menor que 5" en rojo. Si el valor es mayor que 5 debe mostrar el mensaje "El valor ... es mayor que 5" en azul. 
Si el valor es 5 debe mostrar el mensaje "El valor es 5" en verde.
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aleatorio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .rojo {
            color: red;
        }
        .verde {
            color: green;
        }
        .azul {
            color: blue;
        }
    </style>
</head>
<body>

<?php

//RAND: PARA NÚMEROS ALEATORIOS
//Entre paréntesis podemos poner nueros manualmente (1,5,3,8,10,50) o de esta manéra (1,50) y esto ira del 1 al 50
$aleatorio = rand(1,10);
//Si el valor de $aleatorio es menor que 5 ($aleatorio < 5)
if ($aleatorio < 5) {
    echo "<p class='rojo'>El valor $aleatorio es menor que 5</p>";
//Si el valor es mayor que 5, si no se cumple la condición de arriba creamos otra el el else if
} else if ($aleatorio > 5) {
    echo "<p class='azul'>El valor $aleatorio es mayor que 5</p>";
//Solo poniendo el esle es que si no se ha cumplido ninguna de las enteriores por ultimo se cumplirá esta.
} else {
    echo "<p class='verde'>El valor es 5</p>";
}
?>

</body>
</html>


<!--EJERCICIO 04-->

<!--
FOR
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estructuras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
$contador = 0;
//FOR: Tiene 3 parte (iniciación bucle; condición bucle; incremento/decremento)
//si queremos que el incremento o el decremento sea mayor lo hacemos de esta manera ($i = $i + 5) ó ($i = $i - 5), esto hace que incremente/decremente en 5.
//$i - variable que controla el bucle
//Este for hace que la variable $i vale 6, la condición mayor o igual a 0 y decrementa en 1
for ($i=6; $i >= 0; $i--) {
//Este if comprueba si el numero es PAR
//if (Si el numero $i, es divisible % por 2 el resultado debe ser == a 0)
    if ($i % 2 == 0) {
//Imprime el resultado en un parrafo <p>$i</p>
        print "<p>$i</p>";
//else { si no lo es a la variable $contador++ le incrementamos en 1, esto te dice cuantos numeros hay IMPARES}
    } else {
        $contador++;
    }
}
echo "Hay $contador impares entre 6 y 0";

//Con este bucle creamos una tabla html con 3 $filas y 4 $columnas
$filas = 3;
$columnas = 4;
//Empezamos la tabla metido en un echo
echo "<table style='border: 2px solid black'>";
//Este for crea las filas (tr)
//for (variable valor 0, menor < que el numero de $filas 3, incrementa en 1 hasta el 3)
for ($i=0; $i < $filas; $i++) { 
    echo "<tr>";
//Este for crea las columnas
    for ($j=0; $j < $columnas; $j++) { 
        echo "<td style='border: 2px solid black'>$j</td>";
    }
    echo "</tr>";
}

//EUROS A PESETAS
echo "</table>";
//DEFINE: Con esto creamos una constante, un numero que no varía, en este caso el valor de 1€ equivale a 166.386 pesetas.
//define ("NOMBRE CONSTANTE", VALOR)
define("PESETAS", 166.386);
//for ($i vale 1, $i menor o igual a 10, incrementa en 1 $++), este for irá hasta 10€
for ($i=1; $i <= 10 ; $i++) { 
//la constante la iniciamos solo poniendo su nombre PESETAS
    print ("$i € = " . $i*PESETAS . " pts<br/>");
}
echo "<br/>";

//DATE: Con esto sacaremos la hora del sistema
//Variable $hora es igual a date("H"), H representa la hora
$hora = date("H");

//if ($hora es mayor o igual que 8 y && $hora en menor o igual a 12)
if ($hora >= 8 && $hora <= 12) {
    echo "Buenos días";
//if ($hora es mayor que 12 y && $hora en menor o igual a 20)
} else if ($hora > 12 && $hora <= 20) {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}
echo "<br/>";

//STRLEN: DEVUELVE LA LOGITUD DE UNA CADENA
//Con la función rand creamos una variable que vaya del 1 al 100
$numero = rand(1, 100);
//creamos otra variable ($digitos) que con strlen cuente la logitud del valor de la variable ($numero)
$digitos = strlen($numero);
echo "$numero tiene $digitos digitos";

//if ($numero es menor que < 10) el numero de digitos en 1
if ($numero < 10) {
    $digitos = 1;
} else if ($numero < 100) {
    $digitos = 2;
} else {
    $digitos = 3;
}
echo "$numero tiene $digitos digitos";
?>

</body>
</html>