<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
	//MYSQLI_CONNECT: Para conectar a la base de datos mysqli_connect("IP", "Usuario", "Contraseña", "Esquema de la BD")
	//OR DIE: Esto nos va a dar un mensaje de error cuando no se a podido conectar a la BD y termina el Script
        $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas de conexión");
	//MYSQLI_QUERY: Para hacer consultas sobre la base de datos $conexion
	//mysqli_query(Base de datos, "Consulta")
        $registros = mysqli_query($conexion, "SELECT idAlumno, nombre, mail, codigocurso FROM alumnos") or die("Problemas en la consulta:".mysqli_error($conexion));
       
	//Mostrarlo por pantalla con un While, para que te muestre el valos de la fila 1, 2, 3, etc...
        while ($reg=mysqli_fetch_array($registros)) {
            echo "ID Alumno: " . $reg['idAlumno'] . "<br/>";
            echo "Nombre: " . $reg['nombre'] . "<br/>";
        }
		
	//MYSQLI_CLOSE: Esto Cierra la conexion con la Base de Datos.
        mysqli_close($conexion);
    ?>
</body>
</html>