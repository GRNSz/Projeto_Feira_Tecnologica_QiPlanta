<?php
require_once 'ProdutoController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $termo = isset($_POST['termo']) ? $_POST['termo'] : '';
    
    $produtoController = new \MeuProjeto\controllers\ProdutoController();
    $todosProdutos = $produtoController->listarTodos();
    
    $resultados = array();
    foreach ($todosProdutos as $id => $produto) {
        if (stripos($produto['nome'], $termo) !== false || 
            stripos($produto['descricao'], $termo) !== false || 
            stripos($produto['categoria'], $termo) !== false) {
            $produto['id'] = $id; // Adiciona o ID ao produto
            $resultados[] = $produto;
        }
    }
    
    header('Content-Type: application/json');
    echo json_encode($resultados);
    exit;
}

?>