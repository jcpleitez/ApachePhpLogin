<?php

$Respuesta = "";
if ($_POST['user'] == "admin" && $_POST['password'] == "admin") {
  $Respuesta = "OK";
}else {
  $Respuesta = "Usuario o contraseña incorrectos"
}

echo json_encode($Respuesta);

?>
