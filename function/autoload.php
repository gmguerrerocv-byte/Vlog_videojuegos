<?php 

session_start();
  
 function autoloadClases($nombreClase){

   // obtener Ruta absoluta, ->carpeta base donde estoy ejecutando la clase super variable , VARIABLE MAGICA __DIR__
   

    $archivoClase = __DIR__ . "/../class/" . $nombreClase . ".php";

    if(file_exists($archivoClase)){
        require_once $archivoClase;
    }

 }

    spl_autoload_register('autoloadClases');












?>