<?php
$segundos = trim(htmlspecialchars(strip_tags($_REQUEST["segundos"]), ENT_QUOTES, "UTF-8"));
$minutos = intdiv($segundos, 60);
$resto = $segundos % 60;
if ($segundos <= 0) {
    print "El número no es válido";
} else if ($segundos < 60)  {
    print "$segundos segundos";
} else {
    print "$segundos segundos son $minutos minutos y $resto segundos";
}
?>