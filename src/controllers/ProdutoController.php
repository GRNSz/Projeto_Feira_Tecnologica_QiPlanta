<?php

namespace MeuProjeto\controllers;

class ProdutoController {
    public function index() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        
        if ($id) {
            // Redireciona para a página de detalhes com o ID
            header("Location: ../views/detalhes.php?id=" . $id);
            exit;
        }
    }

    public function getDetalhes($id) {
        // Aqui você pode adicionar a lógica para buscar os detalhes do produto
        $produtos = [
            1 => [
                'nome' => 'Lírio-da-paz',
                'preco' => 30.00,
                'imagem' => './images/liriodapaz.png',
                'descricao' => 'Além de purificar o ar, é ótimo para ambientes internos por sua tolerância à sombra e baixa necessidade de água.'
            ],
            2 => [
                'nome' => 'Jibóia',
                'preco' => 25.00,
                'imagem' => './images/jiboia.png',
                'descricao' => 'Uma trepadeira resistente que se adapta bem a vários tipos de iluminação. Não exige muitos cuidados e é excelente para purificação do ar.'
            ],
            3 => [
                'nome' => 'Espada-de-São-Jorge',
                'preco' => 35.00,
                'imagem' => './images/espadadesaojorge.png',
                'descricao' => 'Perfeita para ambientes internos, resistente e não precisa de muita água. Também ajuda na purificação do ar.'
            ]
        ];

        return isset($produtos[$id]) ? $produtos[$id] : null;
    }
}