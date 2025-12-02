<?php


$id = isset($_GET['id']) ? $_GET['id'] : FALSE;

$juegoId = new Videojuegos();

$jId = ($juegoId->get_x_id($id));






?>

<br>
<div class="d-flex justify-content-center align-items-center">
  <div class="row w-100 justify-content-center">
    <?php if(isset($juegoId)) { ?>
      <h1 class="text-center my-5"><?=  $jId->getNombre() ?></h1>
      <div class="col-12 d-flex justify-content-center pt-5">
        <div class="card mb-3" style="max-width: 900px;">
          <div class="row g-0">
            <div class="col-md-4">
               <img  src="img/juegos/<?= $jId->getImg1() ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Nombre: <?= $jId->getNombre() ?></h5>
                <p class="card-text">Categoria: <?= $jId->getCategoria() ?> 
                  Compañia: <?= $jId->getCompania() ?> </p>
                <p class="card-text">Lanzamineto de juego<?= $jId->getLanzamiento() ?></p>
                <p class="card-text">Plataforma de juego: <?= $jId->getPlataforma() ?></p>
                
                <a  target="_blank" class="btn btn-warning w-100 fw-bold" href="<?= $jId->getLink() ?>"><?= $jId->getTiene() ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <h2 class="text-center mt-5 p-5 text-danger">No se encontro el producto deseado</h2>
    <?php } ?>
  </div>
</div>

</div>

<!-- "id" =>    15,
            "nombre" =>    "Battletoads",
            "categoria" =>    "fight",
            "lanzamiento" =>    1991,
            "plataforma" =>    "Nintendo",
            "bajada" =>    "Pimple y la princesa Angelica son raptados por Dark Queen mientras paseaban juntos.",
            "img1" =>    "battletoads.jpg",
 -->