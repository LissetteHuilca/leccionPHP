<?php

include_once('usuarios.php');
include_once('Collector.php');

class usuariosCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    echo "linea 1";
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new usuarios($c{'id_usuario'},$c{'nombre'},$c{'tipo'},$c{'fechaNacimiento'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario WHERE id_usuario= ? ", array("{$id}"));        
    $ObjUsuario = new usuarios($row[0]{'id_usuario'},$row[0]{'nombre'});

    return $ObjUsuario;        
  }

  function updateUsuario($id,$nombre,$tipo,$fechaNacimiento) {
    $insertrow = self::$db->updateRow("UPDATE public.usuarios SET nombre = ?, tipo = ?, fechaNacimiento = ?  WHERE id_usuario = ? ", array( "{$nombre}",$id));   
  }  

  function deleteUsuario($id) {
    $deletetrow = self::$db->deleteRow("DELETE FROM public.usuarios WHERE id_usuario = ? ", array( "{$id}"));   
  } 


  function createUsuario($nombre, $tipo, $fechaNacimiento){
    $insertrow = self::$db->insertRow("INSERT INTO public.usuarios (nombre, tipo, fechaNacimiento) VALUES (?. ?, ?)", array("{$nombre}", "{$tipo}", "{$fechaNacimiento}"));
  }

}
?>

