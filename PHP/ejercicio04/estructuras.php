<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estructuras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <?php
    $contador = 0;
    for ($i=6; $i >= 0; $i--) { 
        if ($i % 2 == 0) {
        print "<p>$i</p>";
        } else {
            $contador++;
        }
    }
    echo "Hay $contador impares entre 6 y 0";

    $filas = 3;
    $columnas = 4;
    echo "<table style='border: 2px solid black; padding:5px'>";
    for ($i=0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j=0; $j < $columnas; $j++) {
                echo "<td style='border: 2px solid black; padding: 5px'></td>";
            }
            echo "</tr>";
    }

    echo "</table>";

    /*muestre por pantalla del 1 al 10 la conversion en pesetas
    1 euro son 166.386 pesetas*/
    define("PESETAS", 166.368);
    for ($p=1; $p <= 10; $p++) { 
        $conversion = ($p*PESETAS);
        echo "<p>$p € son $conversion pts</p>";
        //print ("$i € = " . $i*PESETAS . " pts<br/>");
    }

    /*Funcion date devuelve la hora del sistema */
    
    $hora = date("H");
    $minuto = date("");
    if ($hora >= 8 && $hora <= 12){
        echo "Buenos dias, son las $hora:$minuto";
    } else if ($hora > 12 && $hora <= 20) {
        echo "Buenas tardes, son las $hora:$minuto";
    }
    else echo "Buenas noches, son las $hora:$minuto";

    "<br/>" ;

    // Genera un valor aleatorio entre 1 y 100 e indica cuantos digitos tiene
    $aleatorio = rand(1, 100);
    $digitos = count_chars($aleatorio);
    echo "$aleatorio";
    echo "$digitos";



    ?>

</body>
</html>