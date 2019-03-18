<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Segundo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
        if (!empty($referer)) {
            echo "<p><a href='$referer'>Volver</a></p>";
        } else {
            echo "<p><a href='javascript:history.go(-1)'>Volver</a></p>";
        }

        $usuario = trim(htmlspecialchars($_REQUEST["usuario"], ENT_QUOTES, "UTF-8"));
        if (empty($usuario)) {
            header('location: primero.php?error=Debe rellenar los campos');
        } else {
            setcookie("usuarioPro", $usuario, time()+60*60*24*365);

            session_start();
            $_SESSION['nombreUsuario'] = $usuario;
            ?>

            <div style="margin: 0 auto; width: 200px">
                <form method="GET" action="tercero.php">
                    <p>
                        <label for="peso">Peso:</label>
                        <input type="text" name="peso" id="peso" /> 
                    </p>
                    <p>
                        <label for="altura">Altura:</label>
                        <input type="text" name="altura" id="altura" /> 
                    </p>
                    <p>
                        <input type="submit" value="Enviar" />
                    </p>
                </form>
            </div>

            <?php
        }
    ?>
</body>
</html>