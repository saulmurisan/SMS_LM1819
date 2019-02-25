<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="GET" action="formulario.php">
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="
        <?php
            if (isset($_COOKIE['mailUsu'])) {
                echo $_COOKIE['mailUsu'];
            }
        ?>
        ">
        <br/>
        <label for="contraseña">Contraseña: </label>
        <input type="password" id="contraseña" name="contraseña">
        <br/>
        <label for="recordar">Recordar email</label>
        <input type="checkbox" id="recordar" name="recordar" value="1">
        <br/>
        <input type="submit" value="Enviar" >
    </form>
    <p>
        <a href="formulario.php"> Ir a resultado</a>
    </p>
</body>
</html>