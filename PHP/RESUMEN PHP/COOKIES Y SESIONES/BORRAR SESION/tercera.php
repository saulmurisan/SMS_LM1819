<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sesiones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--Aquí vamos a presentar el nombre-->
    <?php
        session_start();
        print "Hola " . $_SESSION['nombreWeb'];
    ?>
</body>
</html>