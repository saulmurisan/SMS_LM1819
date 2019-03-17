<?php
    if (isset($_REQUEST['color'])) {
        setcookie("color", $_REQUEST['color'], time()+60*60*24*365);
    }
//HEADER: es una reedireción, le decimos que vaya a formu.php y vuelve al principio (redireciona).
    header('Location: formu.php');
?>