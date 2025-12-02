<?php

  $categorias= (new Categoria())->lista_completa();


?>


<div class="row -my-5">
    <div class="col">
        <h1 class="text-center mb-5">Agregar Nuevo Personaje</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_videojuego_acc.php" method="POST" enctype="multipart/form-data">

                <div class="col-6 mb-3">
                    <label class="form-label" for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                </div>

               
                <div class="col-md-6 mb-3">
                    <label for="id_categoria" class="form-label">Categoria</label>
                    <select class="form-select" name="id_categoria" id="id_categoria" required>
                        <option value="" selected disabled>Elija una opción</option>
                        <?php foreach ($categorias as $c) {  ?>
                            <option value="<?= $c->getId() ?>"><?= $c->getNombre() ?></option>
                        <?php  } ?>
                    </select>
                </div>

              

                <div class="col-6 mb-3">
                    <label class="form-label" for="lanzamiento">Lanzamiento:</label>
                    <input type="number" class="form-control" name="lanzamiento" id="lanzamiento" max="9999" required>
                    <div class="form-text">Ingresar el año con 4 digitos</div>
                </div>


                <div class="col-12 mb-3">
                    <label class="form-label" for="plataforma">Plataforma:</label>
                    <input type="text" class="form-control" name="plataforma" id="plataforma" required>
                    <div class="form-text">En caso de que sean multiples creadores , separar los nombres con comas</div>
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label" for="bajada">Bajada:</label>
                    <textarea name="bajada" id="bajada" class="form-control"></textarea>

                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="compania">Compania:</label>
                    <textarea name="compania" id="compania" class="form-control"></textarea>

                </div>

                  <div class="col-6 mb-3">
                    <label class="form-label" for="img1">Agrega una imagen:</label>
                    <input type="file" class="form-control" name="img1" id="img1">
                </div>


                <div class="col-12 mb-3">
                    <label class="form-label" for="link">Link:</label>
                    <textarea name="link" id="link" class="form-control"></textarea>

                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="tiene">Tiene:</label>
                    <textarea name="tiene" id="tiene" class="form-control"></textarea>

                </div>

                <button type="submit" class="btn btn-primary">Cargar Personaje</button>




            </form>
        </div>
    </div>
</div>