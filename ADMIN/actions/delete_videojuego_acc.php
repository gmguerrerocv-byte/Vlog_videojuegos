<?php 

    require_once "../../function/autoload.php";

    $id = $_GET['id'] ? $_GET['id'] : FALSE;

    $videojuego = (new Videojuegos())->get_x_id($id);

   

    

    try {

            if(!empty($videojuego->getImg1())){
                (new Imagen())->borrarImagen(__DIR__ .  "/../../img/Juegos/" . $videojuego->getImg1());
            }

            $videojuego->delete();




            $videojuego->edit($postData['nombre'], $postData['id_categoria'], $postData['compania'], $postData['lanzamiento'], $postData['plataforma'], $postData['bajada'],$postData['img1'],$postData['link'],$postData['tiene'], $id);
            header('Location: ../index.php?sec=admin_videojuegos');

    } catch (\Exception $e) {
        die("No se pudo cargar el personaje" .  $e);
    }



?>