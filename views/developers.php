<?php

$developers = new Developers();

$developer = $developers->lista_completa();



?>
<div class="row">
    <h1 class="text-warning pt-5 text-center">Developers de la pagina</h1>
    <?php if (count($developer)) { ?>
        <?php foreach ($developer as $dev) { ?>
            <div class="col-4 my-5">
                <div class="card text-bg-dark">
                    <img width="400px" src="img/<?= $dev->getImg1() ?>" class="card-img" alt="imagen de: <?= $dev->getNombre() ?> ">
                    <div class="card-img-overlay">
                        


                    </div>
                    <h5 class="card-title text-warning">Nombre: <?= $dev->getNombre() ?></h5>
                        <p class="card-text text-warning">Email: <?= $dev->getEmail() ?></p>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>

        <div class="col-12">
            <h2 class="text-center text-danger mb-5">No se encontraron los devs</h2>
        </div>

    <?php } ?>
</div>