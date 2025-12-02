<?php 
require_once "../../function/autoload.php";

$postData = $_POST;

$fileData=  $_FILES['img1'];


try {
     $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/Juegos", $fileData );

    (new Videojuegos())->insert($postData['nombre'], $postData['id_categoria'], $postData['compania'], $postData['lanzamiento'], $postData['plataforma'], $postData['bajada'], $imagen , $postData['link'],$postData['tiene']);
     
    header('Location:../index.php?sec=admin_videojuegos');

} catch (\Exception $e) {
    die("No se pudo cargar el videojuego" . $e);
}

 

?>