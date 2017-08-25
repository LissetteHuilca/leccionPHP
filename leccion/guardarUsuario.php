<!DOCTYPE HTML>
<html>
<head>
<title></title>
</head>
<body>

<div id="main">
<?php
$nombre=$_POST["nombre"];
$tipo=$_POST["tipo"];
$fechaNacimiento=$_POST["fechaNacimiento"];
echo 'Hola' . htmlspecialchars($nombre) . '!';

include_once("usuariosCollector.php");

$UsuarioCollectorObj = new usuariosCollector();
$UsuarioCollectorObj->createUsuario($nombre, $tipo, $fechaNacimiento);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al inicio</a></div>

</div>

</body>
</html>