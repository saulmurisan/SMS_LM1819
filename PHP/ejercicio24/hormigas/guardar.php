<?php
$raza = trim(htmlspecialchars($_REQUEST["raza"], ENT_QUOTES, "UTF-8"));
$nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
$tamano = trim(htmlspecialchars($_REQUEST["tamano"], ENT_QUOTES, "UTF-8"));
$descripcion = trim(htmlspecialchars($_REQUEST["descripcion"], ENT_QUOTES, "UTF-8"));

$conexion = mysqli_connect("localhost", "root", "", "hormigas")
    or die("Problemas en la conexion");

mysqli_query($conexion, "INSERT INTO hormigas(raza,nombrecient,tamano,descripcion) 
    VALUES ('$raza','$nombre',$tamano,'$descripcion')")
    or die("Problemas en el insert ".mysqli_error($conexion));

mysqli_close($conexion);
?>