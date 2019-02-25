<?php
$temperatura = trim(htmlspecialchars($_REQUEST["temperatura"], ENT_QUOTES, "UTF-8"));
$unidad = trim(htmlspecialchars($_REQUEST["opcion"], ENT_QUOTES, "UTF-8"));

if (empty($temperatura)) {
    print "<p>Campo temperatura vacío</p>";
} else if (!is_numeric($temperatura)) {
    print "<p>Campo temperatura no es un número</p>";
} else if ($temperatura < -273.15 && $unidad == "c" ) {
    print "<p>Campo temperatura en Celsius debe ser >= -273.15 ºC</p>";
} else if ($temperatura < -459.67 && $unidad == "f") {
    print "<p>Campo temperatura en Fahrenheit debe ser >= -459.67 ºF</p>";
} else {
    if ($unidad == "c") {
        $tempf = round(($temperatura * 1.8) + 32, 2);
        print "<p>$temperatura ºC son $tempf ºF</p>";
    } else {
        $tempc = round(($temperatura - 32) / 1.8, 2); 
        print "<p>$temperatura ºF son $tempc ºC</p>";
    }
}

?>