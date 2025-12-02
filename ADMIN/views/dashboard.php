<div class="d-flex justify-content-center p-5">
    <div>

        <div >
            <?= (new Alerta())->get_alertas(); ?>
        </div>
        <h1 class="text-center mb-5 fw-bold">PANEL DE CONTROL</h1>
        <h2>Bienvenido administrador <?= $userData['username'] ?></h2>

    </div>

</div>