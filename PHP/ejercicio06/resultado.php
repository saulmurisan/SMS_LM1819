<?php

if ($_REQUEST["nombre"] != "") {
    print "<p>Su nombre es $_REQUEST[nombre]</p>";
}

if (isset($_REQUEST["opcion"])) {
    print "Opcion marcada";
}

print_r($_REQUEST);
print_r($_FILES);
?>