<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Actualizar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $identificador = trim(htmlspecialchars($_REQUEST["identificador"], ENT_QUOTES, "UTF-8"));
    $nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
    $curso = trim(htmlspecialchars($_REQUEST["curso"], ENT_QUOTES, "UTF-8"));

    $conexion = mysqli_connect("localhost", "root", "", "cursophp")
        or die("Problemas de conexión");

    $registros = mysqli_query($conexion, "UPDATE alumnos SET nombre='$nombre', codigocurso=$curso WHERE idAlumno=$identificador") 
        or die("Problemas de actualización ".mysqli_error($conexion));

    echo "<p>Alumno actualizado</p>";
    ?>
</body>
</html>