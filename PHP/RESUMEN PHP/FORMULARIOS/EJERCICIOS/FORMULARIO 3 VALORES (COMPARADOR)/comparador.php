<?php

//Escriba un formulario para introducir 3 números (entre 0 y 100). Debe indicar si son iguales, 
//si hay dos iguales o si los tres son distintos.

$num1 = trim(htmlspecialchars($_REQUEST["num1"], ENT_QUOTES, "UTF-8"));
$num2 = trim(htmlspecialchars($_REQUEST["num2"], ENT_QUOTES, "UTF-8"));
$num3 = trim(htmlspecialchars($_REQUEST["num3"], ENT_QUOTES, "UTF-8"));


//Si el campo num1 esta vacío (empty) o (||) es distinto a un valor numerico (!is_numeric) o es menor a 0 ($num1) o es mayor a 100 ($num1>100)
if (empty($num1) || !is_numeric($num1) || $num1<0 || $num1>100) {
    print "<p>Error en NUM1</p>";
} else if (empty($num2) || !is_numeric($num2) || $num2<0 || $num2>100) {
    print "<p>Error en NUM2</p>";
} else if (empty($num3) || !is_numeric($num3) || $num3<0 || $num3>100) {
    print "<p>Error en NUM3</p>";
	
//Si se cumple lo anterior comparamos
} else {
//Si $num1 es igual a $num2 y (&&) $num2 es igual a $num3
    if ($num1 == $num2 && $num2 == $num3) {
        print "<p>TODOS IGUALES</p>";
//Si num1 es igual a num2 o num2 es igual a num3 o num1 es igual a num3
    } else if ($num1 == $num2 || $num2 == $num3 || $num1 == $num3) {
        print "<p>HAY 2 IGUALES</p>";
    } else {
        print "<p>SON DISTINTOS</p>";
    }
}
?>