<?php

//Estamos capturando la información del campo email, reemail y noticias.
$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
$reemail = trim(htmlspecialchars($_REQUEST["reemail"], ENT_QUOTES, "UTF-8"));
$noticias = trim(htmlspecialchars($_REQUEST["noticias"], ENT_QUOTES, "UTF-8"));

//---VALIDAR EL CAMPO EMAIL Y EL EMAIL DE CONFIRMACIÓN
//Si lo escrito en el campo es diferente a un email, nos da un mensaje de ERROR
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email";
} else if (!filter_var($reemail, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email de confirmación";
} else if ($email != $reemail) {
    print "Debe coincidir el email de confirmación";
	
//---VALIDAR EL CAMPO NOTICIAS---
} else if ($noticias == -1) {
    print "Debe indicar si desea o no recibir noticias";
} else {
    if ($noticias == 0) {
        print "Su correo $email no va a recibir noticias";
    } else {
        print "Su correo $email va a recibir noticias";
    }
}
?>