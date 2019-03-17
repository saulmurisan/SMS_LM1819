<!--Realice un formulario que introduzca dos valores (pies y pulgadas) y los convierta a centímetros. 
Los pies deben ser un número entero mayor o igual que cero. Las pulgadas son un número entero o decimal 
mayor o igual que cero. Un pie son doce pulgadas y una pulgada son 2,54 cm.-->

<?php
$pies = trim(htmlspecialchars($_REQUEST["pies"], ENT_QUOTES, "UTF-8"));
$pulgadas = trim(htmlspecialchars($_REQUEST["pulgadas"], ENT_QUOTES, "UTF-8"));

//VARIABLES BULEANAS: VERDADERO O FALSO
$piesok = false;
$pulgadasok = false;
//Definimos una constante, este valor no va a variar.
define('UNAPULGADA', 2.54);

//EMPTY: Comprobar que el campo no este vacio.
if (empty($pies)) {
    print "<p>Campo Pies vacío</p>";
//!FILTER_VALIDATE_INT: Comprueba que lo escrito en el campo sea un numero entero.
} else if (!filter_var($pies, FILTER_VALIDATE_INT)) {
    print "<p>Campo Pies No es un Número Entero</p>";
//Si la variable en menor a 0, el numero no puede ser menor a 0.
} else if ($pies < 0) {
    print "<p>Campo Pies debe ser >= 0</p>";
//Si todo es correrco y se a cumplido todo lo de arriba, que el evalor sea entero y mayor a 0.
} else {
    $piesok = true;
}


if (empty($pulgadas)) {
    print "<p>Campo Pulgadas vacío</p>";
} else if (!filter_var($pulgadas, FILTER_VALIDATE_FLOAT)) {
    print "<p>Campo Pulgadas No es un Número Decimal</p>";
} else if ($pulgadas < 0) {
    print "<p>Campo Pulgadas debe ser >= 0</p>";
} else {
    $pulgadasok = true;
}

//---CALCULAR---
//Si las variables $piesok y $pulgadasok son TRUE hace la operación.
if ($piesok && $pulgadasok) {
    $cm = ($pies * 12 + $pulgadas) * UNAPULGADA;
    print "<p>$pies pies y $pulgadas pulgadas son $cm centímetros</p>";
}
?>