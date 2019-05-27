<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<peliculas>
    <pelicula>
        <titulo>Mi última clase de LM</titulo>
        <personajes>
            <personaje>
                <nombre>Profesor</nombre>
                <actor>Yo y Yo</actor>
            </personaje>
            <personaje>
                <nombre>Alumno</nombre>
                <actor>El Alumno</actor>
            </personaje>
        </personajes>
        <argumento>Esta es la última clase del curso
        </argumento>
        <grandes-frases>
            <frase>No es evaluable. Es conocimiento</frase>
        </grandes-frases>
        <puntuacion tipo="votos">20<puntuacion>
        <puntuacion tipo="estrellas">5<puntuacion>
    </pelicula>
</peliculas>
XML;
?>