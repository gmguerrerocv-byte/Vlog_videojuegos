<?php

require_once "function/autoload.php";

$secciones_validas = [
    "home" => [
        "titulo" => "Bievenidos"
    ],
    "quienes_somos" => [
        "titulo" => "Nosotros"
    ],
    "categorias" => [
        "titulo" => "Nuestro Catalogo"
    ],
    "juego" => [
        "titulo" => "Detalle del juego"
    ],
    "todos" => ["titulo" => "todos los  Juegos"
],
"developers" => ["titulo" => "developers"],
"formulario" => ["titulo"=> "contacto"],
"creditos" => ["titulo" => "creditos"]

];

$seccion = isset($_GET['sec']) ? $_GET['sec'] : "home";

if (!array_key_exists($seccion, $secciones_validas)) {
    $vista = "404";
    $titulo = "404- Pagina no encontrada";
} else {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
}

?>



<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retrogaming - <?= $titulo?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body  style="background-color:#1B3C53 ;" class="d-flex flex-column min-vh-100">
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid bg-black">
                <a class="navbar-brand text-white" href="index.php?sec=home">Retrogaming</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="index.php?sec=home">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu bg-warning">
                                <li><a class="dropdown-item" href="index.php?sec=categorias&cat=3">Beat'em Up</a></li>
                                <li><a class="dropdown-item" href="index.php?sec=categorias&cat=2">Aventura</a></li>
                                <li><a class="dropdown-item" href="index.php?sec=categorias&cat=1">Arcade</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index.php?sec=todos">Todos</a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-disabled="true" href="index.php?sec=quienes_somos">Nosotros</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-white" href="index.php?sec=formulario">Contacto</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?sec=developers">Devs</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>




    <main class="container ">
        <?php
        require ("views/$vista.php") ? "views/$vista.php" : "views/404.php";
        ?>
    </main>












    <footer class="bg-black w-100 mx-auto">
        <div class="d-flex justify-content-between align-items-center">
        <p class="mb-0 mx-5 text-warning">Todos los derechos reservados &copy; - 2025 - CFP20 - LOS FRIKIS</p>
        <a class=" mx-5 btn text-warning" href="index.php?sec=creditos">Creditos</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>