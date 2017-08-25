<?php

class usuarios
{
    private $id_usuario;
    private $nombre;
    private $tipo;
    private $fechaNacimiento;

    
     function __construct($id_usuario, $nombre, $tipo, $fechaNacimiento) {
       $this->id_usuario = $id_usuario;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->fechaNacimiento = $fechaNacimiento;
     }
    
     function setIdUsuario($id_usuario){
       $this->id_usuario = $id_usuario;
     } 
     function getIdUsuario(){
       return $this->id_usuario;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 
     function setFechaNacimiento($fechaNacimiento){
       $this->fechaNacimiento = $fechaNacimiento;
     } 
     function getFechaNacimiento(){
       return $this->fechaNacimiento;
     }  
}

?> 
