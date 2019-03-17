<?php
$edad = $_REQUEST["edad"];
$email = $_REQUEST["email"];

//---COMPROBAR EL CAMPO EDAD---
//IS_NUMERIC: Esto coumprueba si la variable $edad es un numero.
if (is_numeric($edad)) {
    print "Su edad es $edad";
//ELSE: Si no es un numero da un ERROR
} else {
    print "Error al introducir la edad";
}

//---COMPROBAR EL CAMPO EMAIL---
//FILTER_VAR: Esta variable tiene dos atributor filter_var(Variable que quiero filtrar, y el fultro que vamos a utilizar)
//FILTER_VALIDATE_EMAIL: Este atributo filtra si lo escrito es un EMAIL.
//FILTER_VALIDATE_URL: Este atributo filtra si lo escrito es una URL.
//FILTER_VALIDATE_INT: Este atributo filtra si lo escrito es un numero entero.
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Email correcto";
} else {
    print "Email incorrecto";
}
?>