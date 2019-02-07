<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tablas multiplicar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $j=1;
        for ($i=1; $i <= 10; $i++) {
            echo "<div style='float: left; height: 200px; width: 200px; border: 1px solid black; padding: 5px'>";
            echo "<table>";
            echo "<tr>Tabla del $i";
            while ($j <= 10) {
                $mult=$i*$j;
                echo "<td>$i x $j = $mult</td>";
                $j=$j+1;
            }
            $j=1;
            echo "</tr>";
            echo "</table>";
            echo "</div>";
        }
    ?>
</body>
</html>