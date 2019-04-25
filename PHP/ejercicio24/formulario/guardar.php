<?php
$autor = trim(htmlspecialchars($_REQUEST["autor"], ENT_QUOTES, "UTF-8"));
$titulo = trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "UTF-8"));
$categoria = trim(htmlspecialchars($_REQUEST["categoria"], ENT_QUOTES, "UTF-8"));
$texto = trim(htmlspecialchars($_REQUEST["texto"], ENT_QUOTES, "UTF-8"));

$conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "id9406790_bddrss")
    or die("Problemas en la conexion");

mysqli_query($conexion, "INSERT INTO noticias(autor,titulo,categoria,noticia) 
    VALUES ('$autor','$titulo','$categoria','$texto')")
    or die("Problemas en el insert ".mysqli_error($conexion));

mysqli_close($conexion);
?>