<?php
    $id = $_GET['id'] ?? false;

    $videojuego = (new Videojuegos())->get_x_id($id);

?>

<div class="row my-5 g-3">
    <h1 class="text-center mb-5 fw-bold">¿Está seguro que desea Eliminar el juego?</h1>

    <div class="col-12 col-md-6">
        <img class="img-fluid rounded shadow-md d-block mx-auto mb-3" src="../img/Juegos/<?= $videojuego->getImg1() ?>" width="200px" alt="">

    </div>

    <div class="col-12 col-md-6">
         <h2 class="fs-6">Nombre</h2>
         <p><?= $videojuego->getNombre() ?></p>

         <h2 class="fs-6">Categoria</h2>
         <p><?= $videojuego->getCategoria() ?></p>

         
         <h2 class="fs-6">Compania</h2>
         <p><?= $videojuego->getCompania() ?></p>

         <h2 class="fs-6">Lanzamiento</h2>
         <p><?= $videojuego->getLanzamiento() ?></p>

         <h2 class="fs-6">Plataforma</h2>
         <p><?= $videojuego->getPlataforma() ?></p>

         
         <h2 class="fs-6">Bajada</h2>
         <p><?= $videojuego->getBajada() ?></p>

         
         <h2 class="fs-6">Imagen</h2>
         <p><?= $videojuego->getImg1() ?></p>
         
         <h2 class="fs-6">Link</h2>
         <p><?= $videojuego->getLink() ?></p>

         <h2 class="fs-6">Tiene link?</h2>
         <p><?= $videojuego->getTiene() ?></p>

         <a class="btn btn-danger d-block mt-4" href="actions/delete_videojuego_acc.php?id=<?=  $videojuego->getId()  ?>">Eliminar</a>





    </div>

</div>
