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
$fechaNacimiento=$_POST["fechaNacimiento"];
$tipo=$_POST["tipo"];
$nombre=$_POST["nombre"];
$id_demo=$_POST["id_demo"];

echo "Edicion en proceso... </br>";

include_once("usuariosCollector.php");

$UsuarioCollectorObj = new usuariosCollector();
$UsuarioCollectorObj->updateUsuario($id_demo,$nombre, $tipo, $fechaNacimiento);

echo "id : ".$id_demo. " actualizado a: ".$nombre. $tipo. $fechaNacimiento. " </br>";
?>

<div><a href="index.php"> Volver al inicio </a></div>
</div>

</body>
</html>