<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tercero</title>
</head>
<body>
    <?php
        function calculaIMC($par1, $par2) {
            return ($par1 / ($par2*$par2));
        }
        $peso = trim(htmlspecialchars($_REQUEST["peso"], ENT_QUOTES, "UTF-8"));
        $altura = trim(htmlspecialchars($_REQUEST["altura"], ENT_QUOTES, "UTF-8"));
        $imc = calculaIMC($peso, $altura);

        session_start();
        print "<p>Bienvenido ". $_SESSION['nombreUsuario'] .".</p>";
        print "<p>Su peso es " . $peso . "kg.</p>";
        print "<p>Su altura es " . $altura . "m.</p>";
        if ($imc < 18.5) {
            $resul = print "<p>Su IMC es $imc, tiene BAJO PESO</p>";
        } else if ($imc >= 18.5 || $imc < 25) {
            $resul = print "<p>Su IMC es $imc, tiene PESO NORMAL</p>";
        } else if ($imc >= 25 || $imc < 30) {
            $resul = print "<p>Su IMC es $imc, tiene SOBREPESO</p>";
        } else {
            $resul = print "<p>Su IMC es $imc, tiene OBESIDAD</p>";
        }
    ?>
</body>
</html>