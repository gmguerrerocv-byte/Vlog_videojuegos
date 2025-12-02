<?php

$personajes = (new Videojuegos())->lista_completa();


?>

<div class="row my-5">
    <h1 class="text-center mb-5 fw-bold">administracion de los personajes</h1>
    <div class="row mb-5 d-flex align-items-center">

        <table class="table">
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Nombre</th>
                <th scope="col"> Categoria</th>
                <th scope="col"> Compañia</th>
                <th scope="col"> lanzamiento</th>
                <th scope="col"> plataforma</th>
                <th scope="col"> bajada</th>
                <th scope="col"> img1</th>
                <th scope="col"> link</th>
                <th scope="col"> tiene</th>
            </tr>
            <thead>
            <tbody>

                <?php foreach ($personajes as $p) { ?>

                    <tr>
                        <th scope="row"> <?= $p->getid() ?> </th>
                        <td><?= $p->getNombre() ?></td>
                        <td><?= $p->getCategoria() ?></td>
                        <td><?= $p->getCompania() ?></td>
                        <td><?= $p->getLanzamiento() ?></td>
                        <td><?= $p->getPlataforma() ?></td>
                        <td><?= substr($p->getBajada(), 0,15) ?></td>
                        <td><img src="../img/juegos/<?= $p->getImg1() ?>" width="200px" alt=""></td>
                        <td><?= $p->getLink() ?></td>
                        <td><?= $p->getTiene() ?></td>

                        <td>

                            <a href="index.php?sec=edit_videojuegos&id=<?=  $p->getid() ?>" class="btn btn-warning">Editar</a>
                            <a href="index.php?sec=delete_videojuegos&id=<?= $p->getId() ?>" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>

                <?php } ?>




            </tbody>
            </thead>

        </table>
        <a href="index.php?sec=add_videojuegos" class="btn btn-primary mt-5">Cargar Nuevo Personajes</a>
    </div>

</div>