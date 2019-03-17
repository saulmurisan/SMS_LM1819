<?php
//STRIP_TAGS: Evitar que se imprima las etiquetas HTML para ello utilizamos la funcion strip_tags
//TRIM: Quitar los espacios por delante y por detras.
//HTMLSPECIALCHARS: Evitar que se introduzcan caracteres especiales (&, ", etc...) TRIM(Parametro1, Parametro2, ETC)
$nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));
//Si $nombre es distinto != de vacio ""
if ($nombre != "") {
    print "<p>Su nombre es $nombre</p>";
}

//ISSET: Con esto controlamos si esta definida la variable y no es un valor nulo, en este caso si hemos
//marcado la casilla imprime si no, no imprime nada (TIPO RADIO y CHECKBOX). 
if (isset($_REQUEST["opcion"])) {
    print "<p>Opción marcada</p>";
}

//PRINT_R: Impresion recursiva, imprime todos los elementos que le llega del FORMULARIO.php con la
//Con Variable $_REQUEST imprimimos toda la informacion que nos llega del formulario, MAS INFO: https://www.aprenderaprogramar.com/index.php?option=com_content&view=article&id=581:request-php-diferencias-ventajas-y-problemas-de-get-post-request-ejercicios-ejemplos-cu00835b&catid=70&Itemid=193
print_r($_REQUEST);
//$_FILES
print_r($_FILES);

//Para sacar los resultados de los campos INDIVIDUALMENTE (por separado)
//[nombre] hace referencias al campo NAME del campo que queremos mostrar en FORMULARIO.php

print "<p>Su nombre es $_REQUEST[nombre]</p>";
?>


<?php
//COMPROBAR SI UN CAMPO ESTA VACÍO
//Con esto podemos controlar si el campo esta vacío o no, si lo está no imprime.
//Si el campo del fomulario nombre es distinto (!=) continua print...
if ($_REQUEST[nombre] != "") {
    print "<p>Su nombre es $nombre</p>";
}



?>