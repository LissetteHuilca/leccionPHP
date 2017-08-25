<!DOCTYPE HTML>
<html>
<head>
<title></title>
</head>
<body>

<?php
$id=$_GET["id"];
echo "valor de id es ". $id;
include_once("usuariosCollector.php");
include_once("usuarios.php");
$UsuarioCollectorObj = new usuariosCollector();
$ObjUsuario = $UsuarioCollectorObj->showUsuario($id);
print_r($ObjUsuario);
?>

<h2>Perfil </h2>
<form action="actualizarUsuario.php" method="post">
<p>
Id: <input type="text" name="id_usuario" value="<?php echo $ObjUsuario->getIdUsuario(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre" value="<?php echo $ObjUsuario->getNombre(); ?>" readonly  />
</p>

<p>
Tipo: <input type="text" name="tipo" value="<?php echo $ObjUsuario->getTipo(); ?>" readonly  />
</p>

<p>
Fecha de nacimiento: <input type="text" name="fechaNacimiento" value="<?php echo $ObjUsuario->getFechaNacimiento(); ?>" readonly/>
</p>

<a href="editar.php">  Editar </a>

<a href="eliminar.php">  Eliminar </a>

</form>

</body>
</html>