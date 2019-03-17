<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!--
Formulario en el que metamos un usuario o mail y contraseña y un checkbox para recordar y
el mail salga ya escrito en el campo de email y si no recordamos que borre la cookie.
-->
    <form action="almacenar.php">
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" 
                value="
                <?php
//En este value ponemos el valor de la COOKIE
                    if (isset($_COOKIE['mailUsu'])) {
                        echo $_COOKIE['mailUsu'];
                    }
                ?>
                "/>
        </p>
        <p>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass"/>
        </p>
        <p>
            <label for="recordar">Recordar Email?</label>
            <input type="checkbox" name="recordar" id="recordar" value="1"/>
        </p>
        <p>
            <input type="submit" value="Enviar"/>
        </p>
    </form>
</body>
</html>