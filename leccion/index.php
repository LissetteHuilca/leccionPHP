
<!DOCTYPE HTML>
<html>
<head>
<title> Inicio </title>
</head>
<body>

<div id="main">

<h2>Usuarios</h2>
<?php
include_once("usuariosCollector.php");

$id =1;

$UsuarioCollectorObj = new usuariosCollector();

foreach ($UsuarioCollectorObj->showUsuarios() as $c){
  $id =$c->getIdUsuario();

  echo "<div>";
  echo $c->getIdUsuario() . "  && " .$c->getNombre();

  echo "<a href='perfil.php?id=".$c->getIdUsuario()."'>  Perfil </a>";
  }
?>
<div><a href="nuevoUsuario.php"> Añadir usuario </a></div>

</div>

</body>
</html>