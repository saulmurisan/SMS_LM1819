<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
//SETCOOOKIE: Con esto vamos a guardar el valor dado en el formulario en las COOKIES
//setcookie("NombreDeCookie", "Valor", expiración) si el valor de expiración es 0 cuando se cierre la pagina se borra.
    setcookie("nombreUsu", "Javier", 0);
    ?>
    <p>
        <a href="primera.php">Ir a Primera</a>
    </p>

</body>
</html>