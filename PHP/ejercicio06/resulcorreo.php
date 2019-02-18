<?php

$email = trim(htmlspecialchars(strip_tags($_REQUEST["correo"]), ENT_QUOTES, "UTF-8"));

$confirmacion = trim(htmlspecialchars(strip_tags($_REQUEST["confirmacion"]), ENT_QUOTES, "UTF-8"));

$opcion = trim(htmlspecialchars(strip_tags($_REQUEST["opcion"]), ENT_QUOTES, "UTF-8"));

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email";
} else if (!filter_var($confirmacion, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email de confirmacion";
} else if ($email != $confirmacion) {
    print "Debe coincidir el email de confirmacion";
} else if ($opcion == -1) {
    print "Debe indicar si desea o no recibir noticias";
} else {
    if ($opcion == 0) {
        print "Su correo $email va a recibir noticias";
    } else {
        print "Su correo $email no va a recibir noticias";
    }
}
?>