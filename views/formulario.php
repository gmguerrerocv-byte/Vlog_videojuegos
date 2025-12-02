

<div class="row d-flex justify-content-center mt-3">
    
  <div class="col-6">
    <h2 class="mt-5 text-white text-center">Coloca aqui tus datos</h2>
    <form class="p-5 text-warning"  action="guardar.php" method="POST">
        <div class="p-1" >
            <label for="nombre" class="form-label">Nombre:</label>
            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Coloque aqui su nombre" maxlength="15" required>
        </div>

        <br>

           <div class="p-2 text-warning">
            <label for="apellido" class="form-label">Apellido:</label>
            <input class="form-control" type="text" name="apellido" id="apellido" placeholder="Coloque aqui su apellido" maxlength="15" required>
        </div>
<br>
        <div class="p-2 text-warning">
            <label for="correo" class="form-label">Correo:</label>
            <input class="form-control" type="email" name="correo" id="correo" placeholder="Coloque aqui su correo">
        </div>

        <br>

        <div class="p-2 text-warning">
            <label for="comentarios" class="form-label">Comentarios:</label>
            <textarea class="form-control" name="comentarios" id="comentarios"></textarea>
        </div>

        <br>

        <input class="p-2 btn btn-success" type="submit" value="Enviar">

    </form>
  </div>
</div>



    


