<?php
$edad = trim(htmlspecialchars(strip_tags($_REQUEST["edad"]), ENT_QUOTES, "UTF-8"));

$email = $_REQUEST["email"];

if (is_numeric($edad)) {
    print "<p>Su edad es $edad</p>";
} else {
    print "Error al introducir la edad";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Email correcto";
} else {
    print "Email incorrecto";
}
 //FILTER_VALIDATE_"TIPO"
?>