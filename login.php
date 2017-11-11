<?php

$Respuesta = "";
if ($_POST) {
  if ($_POST['user'] == "admin" && $_POST['password'] == "admin") {
    $Respuesta = "OK";
    die();
  }else {
    $Respuesta = "Usuario o contraseña incorrectos";
    header( "Location: login.html" );
  }
  phpAlert($Respuesta);
}

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

?>
