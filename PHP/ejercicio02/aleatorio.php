<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aleatorio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
       if (rand(1, 10)<5) {
           print "<p style=color:red> El valor es menor que 5 </p>";
       }
       else if (rand(1, 10)>5){
            print "<p style=color:green> El valor es mayor que 5 </p>";
       }
       else {print "<p style=color:blue> El valor es 5 </p>";
       }

       $rand = rand(1, 10);
       if ($rand<5) {
        print "<p style='color:red'> El valor $rand es menor que 5 </p>";
    }
    else if ($rand>5) {
         print "<p style='color:green'> El valor $rand es mayor que 5 </p>";
    }
    else {print "<p style='color:blue'> El valor es 5 </p>";
    }
    ?>

    
</body>
</html>