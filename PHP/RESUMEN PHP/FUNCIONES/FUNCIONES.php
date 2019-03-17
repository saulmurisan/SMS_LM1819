<!--ejercicio 05-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Funciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
//FUNCTION: Es un bloque de código que desarroyamos a parte y que podemos usar en cualquier momento cuantas veces queramos.
//function (parametro entrada1, 2)

//FUNCIÓN 1
		function calculaHipotenusa($par1, $par2) {
            return sqrt($par1*$par1 + $par2*$par2);
        }
//FUNCIÓN 2
        function imprimir($mensaje) {
            print "<p>$mensaje</p>";
        }
        $cat1 = 12;
        $cat2 = 16;
//Llamamos a la funsión CALCULAHIPOTENUSA (pasandole los valores $cat1 y $cat2) con la variable $hipotenusa
//Podemos pasarle todos los valores que queramos pero tiene que coincidir con el mismo numero de parametros de entrada que tambien pueden ser los que queramos.
        $hipotenusa = calculaHipotenusa($cat1, $cat2);
        print "<p>El triángulo de lados $cat1, $cat2 y hipotenusa $hipotenusa</p>";
		
//Llamar función IMPRIMIR
        imprimir("Hola que tal");
		
    ?>
</body>
</html>