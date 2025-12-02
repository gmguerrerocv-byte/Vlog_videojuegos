<?php
require_once "../../function/autoload.php";

$postData = $_POST;

$id = $_GET['id'] ?? false;

$fileData = $_FILES['img1'] ?? FALSE;


/* echo "<pre>";
    print_r($postData);
    echo "</pre>"; */

try {
    $videojuego = new Videojuegos();

    if (!empty($fileData['tmp_name'])) {
        if (!empty($postData['imagen_og'])) {
            (new Imagen())->borrarImagen(__DIR__ . "/../../img/Juegos/" . $postData['imagen_og']);
        }
        $imagen =  (new Imagen())->subirImagen(__DIR__ . "/../../img/Juegos", $fileData);

        $videojuego->reemplazar_imagen($imagen, $id);
    }


    $videojuego->edit($postData['nombre'], $postData['id_categoria'], $postData['compania'], $postData['lanzamiento'], $postData['plataforma'], $postData['bajada'] , $postData['link'], $postData['tiene'], $id);

    header('Location: ../index.php?sec=admin_videojuegos');

} catch (\Exception  $e) {
    die("No se pudo editar el Personaje . $e");
}
