<?php
require_once "conexion.php";

class usuarioModel{
    static public function obtenerUsuario($user, $pass){
      
        $stmt = conexion::conectar()->prepare("SELECT * from usuarios where usuario='$user' and contrasena='$pass'");
        $stmt -> execute();
        return $stmt -> fetch();
        
        $stmt ->close ();
    $stmt =null;
    }
    static public function crearPersona($crea){
        $stmt = conexion::conectar()->prepare("INSERT INTO usuarios (usuario,contrasena,estado) values('$crea[0]','$crea[1]','1')");
        $stmt -> execute();
        return "oke";
        $stmt ->close ();
    $stmt =null; 
    
    }
}