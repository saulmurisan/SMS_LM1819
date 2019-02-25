<?php
$tabla = trim(htmlspecialchars($_REQUEST["tabla"], ENT_QUOTES, "UTF-8"));

if ($tabla > 0 && $tabla <= 100) {
    for ($i=1; $i <= 10; $i++) {
        $mult = $i * $tabla;
        print "<p>$tabla x $i = $mult</p>";
    }
} else {
    print "<p>El número introducido debe estar comprendido entre 1 y 100</p>";
}
?>