<?php
  session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title></title>
</head>
<body>
<div id="main">
<?php

$id=$_GET["id"];

include_once("usuariosCollector.php");

$UsuarioCollectorObj = new usuariosCollector();
$UsuarioCollectorObj->deleteUsuario($id);

echo "Se ha eliminado id : ".$id. " </br>";
?>

<div><a href="index.php"> Volver al inicio </a></div>
</div>

</body>
</html>