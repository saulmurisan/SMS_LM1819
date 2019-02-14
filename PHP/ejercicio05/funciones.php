<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Funciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php

        function calculaHipotenusa($par1, $par2) {
            $hipo = sqrt($par1*$par1 + $par2*$par2);
            return $hipo;
        }

        function imprimir() {
            print "Hola";
        }

        $cat1 = 12;
        $cat2 = 16;
        $hipotenusa = calculaHipotenusa($cat1, $cat2);
        print "<p> El triángulo de lados $cat1, $cat2 e hipotenusa $hipotenusa</p>";

        imprimir();

        function calcularExtension($fichero) {
            //$nombreExt = explode(".", $fichero);
            //return strtoupper($nombreExt[1]);

            $inicio = strrpos($fichero, ".") + 1;
            return strtoupper(substr($fichero, $inicio));
        }

        $nombreFichero = "fichero.exe.txt";
        $ext = calcularExtension($nombreFichero);
        print "<p>La extensión del archivo $nombreFichero es $ext</p>";

    ?>
</body>
</html>