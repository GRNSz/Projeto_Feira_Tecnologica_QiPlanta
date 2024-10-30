<?php 

    $autoloadpath = __DIR__ . "/../../vendor/autoload.php";
    include_once $autoloadpath;
    //var_dump($autoloadpath);

    //"/../../vendor/autoload.php";

    $rota = $_REQUEST['r']; //UsuarioController
    $action = $_REQUEST['action']; //index 

    # Detecta se a requisição é o metodo GET
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $action = 'index';  
    }

    # Detecta se a requisição é o metodo POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $routeControllerClass = "MeuProjeto\\controllers\\" . $rota;
    $rotaControllerInstance = new $routeControllerClass();
    $rotaControllerInstance->$action($_POST);
}
?>