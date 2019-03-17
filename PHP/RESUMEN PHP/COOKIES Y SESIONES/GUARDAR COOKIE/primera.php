<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>
    <?php
	
//Establecer que la COOKIE se guarde en el navegador
//$_COOKIE: Es un array donde se guardan las COOKIES, $COOKIE['NombreCookie']
//Vamos a poner una caja de texto para que el usuario ponga su nombre y se guarde
//ISSET: Si esta establecida
    if (isset($_COOKIE['nombreUsu'])) {
        print "Hola " . $_COOKIE['nombreUsu'];
//ELSE: Si no esta guardado, pasa esto otro.
    } else {
        print "Hola Anónimo";
    }
    ?>
    </p>
    <p>
        <a href="segunda.php">Ir a Segunda</a>
    </p>
</body>
</html>