<?php
$cientifico = trim(htmlspecialchars($_REQUEST["cientifico"], ENT_QUOTES, "UTF-8"));
$experimento = trim(htmlspecialchars($_REQUEST["experimento"], ENT_QUOTES, "UTF-8"));
$departamento = trim(htmlspecialchars($_REQUEST["departamento"], ENT_QUOTES, "UTF-8"));
$articulo = trim(htmlspecialchars($_REQUEST["articulo"], ENT_QUOTES, "UTF-8"));

$conexion = mysqli_connect("localhost", "root", "", "ciencia")
    or die("Problemas en la conexion");

mysqli_query($conexion, "INSERT INTO ciencia(cientifico,experimento,departamento,articulo) 
    VALUES ('$cientifico','$experimento','$departamento','$articulo')")
    or die("Problemas en el insert ".mysqli_error($conexion));

mysqli_close($conexion);
?>