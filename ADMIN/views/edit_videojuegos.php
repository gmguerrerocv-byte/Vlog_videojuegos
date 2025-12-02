<?php
$id = $_GET['id'] ? $_GET['id'] : FALSE;

$vid = (new Videojuegos())->get_x_id($id);

 $categorias= (new Categoria())->lista_completa();




?>
<div class="row -my-5">
    <div class="col">
        <h1 class="text-center mb-5"> Editar videojuego</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_videojuego_acc.php?id=<?= $vid->getId() ?>" method="POST" enctype="multipart/form-data">

                <div class="col-6 mb-3">
                    <label class="form-label" for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $vid->getNombre() ?> " required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="id_categoria" class="form-label">Categoria</label>
                    <select class="form-select" name="id_categoria" id="id_categoria" required>
                        <option value="" selected disabled>Elija una opción</option>
                        <?php foreach ($categorias as $c) {  ?>
                            <option value="<?= $c->getId() ?>"  <?= $c->getId() == $vid->getId_categoria() ? "selected" : ""   ?>><?= $c->getNombre() ?></option>
                        <?php  } ?>
                    </select>
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label" for="lanzamiento">Lanzamiento</label>
                    <textarea name="lanzamiento" id="lanzamiento" class="form-control"><?= $vid->getLanzamiento() ?></textarea>

                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="plataforma">Plataforma</label>
                    <input type="text" class="form-control" name="plataforma" id="plataforma" value="<?= $vid->getPlataforma() ?>" required>
                    <div class="form-text">En caso de que sean multiples creadores , separar los nombres con comas</div>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="bajada">Bajada</label>
                    <input type="text" class="form-control" name="bajada" id="bajada" value="<?= $vid->getBajada() ?>" required>
                    <div class="form-text">En caso de que sean multiples creadores , separar los nombres con comas</div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="img1" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="img1" name="img1">
                </div>


                <div class="col-12 mb-3">
                    <label class="form-label" for="link">Link</label>
                    <input type="text" class="form-control" name="link" id="link" value="<?= $vid->getLink() ?>" required>
                    <div class="form-text">En caso de que sean multiples creadores , separar los nombres con comas</div>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="tiene">Tiene</label>
                    <input type="text" class="form-control" name="tiene" id="tiene" value="<?= $vid->getTiene() ?>" required>

                </div>

                <button type="submit" class="btn btn-primary">Editar Personaje</button>




            </form>
        </div>
    </div>
</div>