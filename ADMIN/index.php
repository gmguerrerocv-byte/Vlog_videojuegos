<?php


require_once "../function/autoload.php";



$secciones_validas = [

    "login" => [
        "titulo" => "Inicio de Sessión",
        "restringido" => FALSE

    ],
    "dashboard" => [
        "titulo" => "Panel de control",
        "restringido" => TRUE
    ],
    "admin_videojuegos" => [
        "titulo" => "Administrador de videojuegos",
        "restringido" => TRUE
    ],
    "add_videojuegos" => [
        "titulo" => "Cargar videojuegos",
        "restringido" => TRUE
    ],
    "edit_videojuegos" => [
        "titulo" => "Editar videojuegos",
        "restringido" => TRUE
    ],
    "delete_videojuegos" => [
        "titulo" => "Borrar videojuego",
        "restringido" => TRUE
    ],

];





// Operador Ternario

$seccion = isset($_GET['sec']) ? $_GET['sec'] : "login";

/* Funcion predefinida: que busque si existe lo que viene en la variable $seccion y si existe el indice de la varibale $secciones_validas : array_key_exists */



if (!array_key_exists($seccion, $secciones_validas)) {
    $vista = "404";
    $titulo = "404 - pagina no encontrada";
} else {
    $vista = $seccion;

    if ($secciones_validas[$seccion]['restringido']) {
        (new Autenticacion())->verify();
    }

    $titulo = $secciones_validas[$seccion]['titulo'];
}





$userData = $_SESSION['loggedIn'] ?? FALSE;


/*    if(isset($_GET['sec'])){
         $seccion = $_GET['sec'];
    }else {
        $seccion = "home";
    }
 */
/*  var_dump($seccion); */

/* $series = $productos['batman'];

echo "<pre>";
    var_dump($series);
echo "</pre>"; */






?>

<!doctype html>
<html lang="es">

<head>
    <meta char+set="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Retrogaming - <?= $titulo  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" data-bs-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Retrogaming</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link <?= $userData ?  "" : "d-none"  ?>" aria-current="page" href="index.php?sec=dashboard">dashboard</a>
                        <a class="nav-link <?= $userData ?  "" : "d-none"  ?>" aria-current="page" href="index.php?sec=admin_videojuegos">Administrador de videojuegos</a>

                          <li class="nav-item <?= $userData ?  "d-none" : ""  ?>">
                        <a class="nav-link active" href="index.php?sec=login">Login</a>
          </li>

          <li class="nav-item <?= $userData ?  "" : "d-none"  ?>">
                    <a class="nav-link active" href="actions/auth_logout.php">Logout</a>
          </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <?php
        require ("views/$vista.php")  ? "views/$vista.php" : "views/404.php";
        ?>
    </main>

    <footer class="bg-secondary">
        <p class="text-light text-center p-4">Todos los derechos reservados - 2025 - CFP20</p>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>