<?php 
require_once "env.php";
require_once "controller/plantilla.controller.php";
require_once "controller/usuarios.controller.php";
require_once "controller/contacto.controller.php";
require_once "controller/producto.controller.php";

require_once "model/usuarios.model.php";
require_once "model/contacto.model.php";
require_once "model/producto.model.php";

$plantilla = new controllerPlantilla();
$plantilla ->plantilla();

?>