<?php



$juegos = new Videojuegos();

$juego = $juegos->lista_completa();


?>


<h1 class="text-center my-5 text-warning pt-5 border-bottom border-warning border-2">TODOS LOS JUEGOS!</h1>

<div class="row">
    <?php if (count($juego)) { ?>
        <?php foreach ($juego as $j) { ?>
            <div class="col-4 my-5">

                <div class="card bg-info border border-warning border-5" style="width: 18rem;">
                    <img height="400px" src="img/juegos/<?= $j->getImg1() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $j->getNombre() ?></h5>
                    </div>
                <div class="bg-white">
                  <p class="card-text"><?= substr($j->getNombre(), 0,60) ?>...</p>  
                </div>
                     <div class="card-body">
                      <a href="index.php?sec=juego&id=<?=$j->getId() ?>" class="btn btn-warning w-100 fw-bold">Ver Mas</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>

        <div class="col-12">
            <h2 class="text-center text-danger mb-5">No se encontraron los juegos</h2>
        </div>

    <?php } ?>


</div>