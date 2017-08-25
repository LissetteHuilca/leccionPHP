<?php
  session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title></title>
</head>
<body>


<h2>Nuevo usuario</h2>
<form action="guardarUsuario.php" method="post">
<p>
Nombre: <input type="text" name="nombre" autofocus required />
</p>
<p>
Tipo: <input type="text" name="tipo" />
</p>
<p>
Fecha de nacimiento: <input type="text" name="fechaNacimiento" />
</p>

<input type="submit" value="Guardar" />

</form>

</body>
</html>