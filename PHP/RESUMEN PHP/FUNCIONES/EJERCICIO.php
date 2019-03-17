<?php
function calcularExtension($fichero) {
//EXPLODE: genera un array con cada una de las partes de la cadena segun el delimitador que le 
//pongas donde "." esta en la posición [0] y $nombreExt esta en la posición [1]
    //$nombreExt = explode(".", $fichero);
//STRTOUPPER: Devuelve el resultado en MAYUSCULAS
    //return strtoupper($nombreExt[1]);
//STRRPOS: Coge el ultimo punto o el delimitador que sea "." de la cadena y +1 para que coja el caracter siguiente al "."
    $inicio = strrpos($fichero, ".") + 1;
//SUBSTR: Extrae subcadenas
    return strtoupper(substr($fichero, $inicio));
}
$nombreFichero = "fichero.exe.txt";
//Aquí llamamos a la función CALCULAREXTENSION
$ext = calcularExtension($nombreFichero);
print "<p>La extensión del archivo $nombreFichero es $ext</p>";
?>