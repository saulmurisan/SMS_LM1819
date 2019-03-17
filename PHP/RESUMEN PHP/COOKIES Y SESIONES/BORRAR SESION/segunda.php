<?php

//SESION: Aqui vamos a meter el nombre en sesion

$nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));

//SESSION_START: Con esto vamos vamos a iniciar la sesion
session_start();
//$_SESSION['NombreSesion']
$_SESSION['nombreWeb'] = $nombre;


//UNSET: con esto quitamos de sesion el usuario en este caso nombreWeb
unset($_SESSION['nombreWeb']);


//Esto se envia a tercera.php
header('Location: tercera.php')
?>