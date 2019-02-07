<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    // Genera un valor aleatorio entre 1 y 100 e indica cuantos digitos tiene
    $aleatorio = rand(1, 100);
    $digitos = strlen($aleatorio);
    echo "$aleatorio tiene $digitos digitos";

    /* if ($numero < 10) {
        $digitos = 1;
    } else if ($numero < 100) {
        $digitos = 2
    } else { 
        $digitos = 3
    }*/
    "<br/>";
    $numero1 = rand(1, 10);
    $numero2 = rand(1, 10);
    $numero3 = rand(1, 10);
    if ($numero1 == $numero2 + $numero3) {
        echo "$numero1 es suma de $numero2 y $numero3 <br/>";
    } else {
        echo "$numero1 no es suma de $numero2 y $numero3 <br/>";
    }
    if ($numero2 == $numero1 + $numero3) {
        echo "$numero2 es suma de $numero1 y $numero3 <br/>";
    } else {
        echo "$numero2 no es suma de $numero1 y $numero3 <br/>";
    }
    if ($numero3 == $numero1 + $numero2) {
       echo "$numero3 es suma de $numero1 y $numero2 <br/>";
    } else {
        echo "$numero3 no es suma de $numero1 y $numero2 <br/>";
    }

    ?>
</body>
</html>