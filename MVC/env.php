<?php

$_enviroment ="dev";
//$enviroment ="prod";

if($_enviroment == "dev"){
    // base de datos
    $_ENV["host"] = 'localhost';
    $_ENV["db"] = 'pcdoctor';
    $_ENV["user"] = 'root';
    $_ENV["pass"] = '';

    //ruta del servidor
    $_ENV["url"] = 'http://localhost/MVC/';
}else{
    $_ENV["host"] = 'localhost';
    $_ENV["db"] = 'pcdoctor';
    $_ENV["user"] = 'root';
    $_ENV["pass"] = '';

    //ruta del servidor
    $_ENV["url"] = 'http://localhost/MVC/';
}