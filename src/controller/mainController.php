<?php 

    include_once __DIR__ . "./../../vendor/autoload.php";

    use MeuProjeto\controller\UsuarioController;

    $usuarioController = new UsuarioController();
    var_dump($usuarioController);

    $usuarioController->store();

    ?>