 <?php
        function calculaArea($par1, $par2) {
            return ($par1*$par2);
        }
        function calculaPerimetro($par1, $par2) {
            return ($par1 + $par1 + $par2 + $par2);
        }
        $base = trim(htmlspecialchars($_REQUEST["base"], ENT_QUOTES, "UTF-8"));
        $altura = trim(htmlspecialchars($_REQUEST["altura"], ENT_QUOTES, "UTF-8"));
        $area = calculaArea($base, $altura);
        $perimetro = calculaPerimetro($base, $altura);
        
        if ($_REQUEST["calculo"] != "1") {
            print "<p>El perímetro del rectángulo es $perimetro</p>";
        } else {
            print "<p>El área del rectángulo es $area</p>";
        }
?>