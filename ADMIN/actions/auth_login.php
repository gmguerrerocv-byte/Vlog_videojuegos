<?php


    require_once "../../function/autoload.php";


    $postData = $_POST;

    $login = (new Autenticacion())->log_in($postData['username'], $postData['pass']);

    if($login){
         (new Alerta())->add_alerta('success', "Bienvenido {$postData['username']}");
        header("Location: ../index.php?sec=dashboard");
    }else {
        header("Location: ../index.php?sec=login");
    }

    
?>