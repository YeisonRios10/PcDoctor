<?php
require_once "conexion.php";

class contactoModel{
    static public function crearContacto($crea){
        $stmt = conexion::conectar()->prepare("INSERT INTO contacto (nombre, email, telefono,descripcion) values('$crea[0]','$crea[1]','$crea[2]','$crea[3]')");
        $stmt -> execute();
        return "okis";
        $stmt ->close ();
    $stmt =null; 
    
    }
}