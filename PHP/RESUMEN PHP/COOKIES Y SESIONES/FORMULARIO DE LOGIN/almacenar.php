<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Almacenar Cookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
//Comprobar si ha pulsado el checkboox con ISSET
    if (isset($_REQUEST['recordar'])) {
//Para guardar la COOKIE, se va a guardar por 1 año time()+segundos*minutos*horas*Días
        setcookie("mailUsu", $email, time()+60*60*24*365);
//Si no lo recordamos borramos la COOKIE -1000 tiempo anterior para borrar.
    } else {
        setcookie("mailUsu", $email, time()-1000);
    }
    ?>
    <p>
        <a href="login.php">Volver</a>
    </p>
</body>
</html>