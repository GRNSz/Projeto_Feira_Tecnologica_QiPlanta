<?php 

    namespace MeuProjeto\controllers;

    class PesquisaProduto {

    private $produtos;

    public function __construct() {
        $this->produtos = new ProdutoController();
    }

    public function buscarID($query) {
        $todosProdutos = $this->produtos->listarTodos();
        $resultados = [];
        
        foreach ($todosProdutos as $id => $produto) {
            if (stripos($produto['nome'], $query) !== false) {
                $resultados[$id] = $produto;
            }
        }
        
        return $resultados;
    }

    public function buscar() {
        if (isset($_GET['query'])) {
            $query = trim($_GET['query']);
            $resultados = $this->buscarID($query);
            
            if (!empty($resultados)) {
                header('Location: ../../src/views/Produtos.php?resultados=' . urlencode(json_encode($resultados)));
            } else {
                header('Location: ../../src/views/Produtos.php?msg=nenhum-resultado');
            }
            exit;
        }
        
        header('Location: ../../src/views/Produtos.php');
        exit;
    }
    
}

?>