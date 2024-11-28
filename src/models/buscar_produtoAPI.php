<?php

require_once '../controllers/ProdutoController.php';

use MeuProjeto\controllers\ProdutoController;

// Configurar cabeçalhos para permitir requisições AJAX
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$nome = isset($_GET['nome']) ? $_GET['nome'] : '';

$produtoController = new ProdutoController();
$produtos = $produtoController->buscarPorNome($nome);
header('Access-Control-Allow-Origin: *');


echo json_encode($produtos);
