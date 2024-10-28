<?php 

    $autoloadpath= __DIR__ . "/../../vendor/autoload.php";
    
    //var_dump($autoloadpath);

    include_once $autoloadpath;

    //"/../../vendor/autoload.php";

    $rota = $_REQUEST['r']; //UsuarioController
    $action = $_REQUEST['action']; //index 

    # Detecta se a requisição é o metodo GET
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $action = 'index';  
    }

    # Detecta se a requisição é o metodo POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
    // use MeuProjeto\controllers\UsuarioController;
    $routeControllerClass = "MeuProjeto\\controllers\\" . $rota;

    $rotaControllerInstance = new $routeControllerClass();

    $rotaControllerInstance->$action($_POST);
    }
?>