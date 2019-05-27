<?php
include 'archivo.php';

$peliculas = new SimpleXMLElement($xmlstr);

// Mostrar el argumento
echo $peliculas->pelicula[0]->argumento . "<br>";

//Mostrar la frase
echo $peliculas->pelicula[0]->{'grandes-frases'}->frases . "<br>";

//Mostrar los personajes
foreach($peliculas->pelicula->personajes->personaje as $p) {
    echo $p->nombre . " - " . $p->actor . "<br>";
}

foreach($peliculas->pelicula->puntuacion as $puntos) {
    switch ($puntos['tipo']) {
        case 'votos':
            echo "Votos: " . $puntos . "<br>";
            break;
        case 'estrellas':
            echo 'Estrellas: ' . $puntos . "<br>";
            break;
        default:
            break;
    }
}

// Modificar la informacion
echo $peliculas->asXML() . "<br>";
$peliculas->pelicula[0]->personajes->personaje[0]->nombre = 'Mi profesor';
echo $peliculas->asXML() . "<br>";
?>