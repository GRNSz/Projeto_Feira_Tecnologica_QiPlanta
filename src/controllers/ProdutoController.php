<?php

namespace MeuProjeto\controllers;

class ProdutoController {
    private $produtos = [];

    public function __construct() {
        $this->produtos = [
            1 => [
                'nome' => 'Lírio-da-paz',
                'preco' => 30.00,
                'imagem' => './images/liriodapaz.png',
                'descricao' => 'Além de purificar o ar, é ótimo para ambientes internos por sua tolerância à sombra e baixa necessidade de água.',
                'cuidados' => 'Rega moderada, preferencialmente quando o solo estiver seco. Manter em locais com sombra ou luz indireta.',
                'categoria' => 'Plantas de Interior',
                'video' => 'FR_qHmrIh6E',
                'avaliacoes' => [
                    ['cliente' => 'João Silva', 'comentario' => 'Uma planta maravilhosa para quem quer decorar o interior da casa sem se preocupar muito com manutenção.'],
                    ['cliente' => 'Maria Fernanda', 'comentario' => 'Adoro o meu Lírio-da-paz! Ele realmente faz uma diferença na qualidade do ar.']
                ]
            ],
            2 => [
                'nome' => 'Jibóia',
                'preco' => 25.00,
                'imagem' => './images/jiboia.png',
                'descricao' => 'Uma trepadeira resistente que se adapta bem a vários tipos de iluminação. Não exige muitos cuidados e é excelente para purificação do ar.',
                'cuidados' => 'Regar moderadamente, manter em ambiente com luz indireta ou sombra parcial.',
                'categoria' => 'Plantas Trepadeiras',
                'video' => 'codigo_do_video_jiboia'
            ],
            3 => [
                'nome' => 'Espada-de-São-Jorge',
                'preco' => 35.00,
                'imagem' => './images/espadadesaojorge.png',
                'descricao' => 'Perfeita para ambientes internos, resistente e não precisa de muita água. Também ajuda na purificação do ar.',
                'cuidados' => 'Regar apenas quando o solo estiver seco, tolera luz direta e indireta.',
                'categoria' => 'Plantas de Interior'
            ],
            4 => [
                'nome' => 'Buquê com 12 Rosas Vermelhas',
                'preco' => 90.00,
                'imagem' => './images/buqueRosas.png',
                'descricao' => 'Lindo Buquê com doze rosas vermelhas nacionais. Ideal para presentear alguém especial.',
                'categoria' => 'Buquês',
                'cuidados' => 'Manter em água limpa, trocar a água diariamente e cortar as hastes em ângulo a cada 2 dias.'
            ],
            5 => [
                'nome' => 'Flor Girassol',
                'preco' => 13.00,
                'imagem' => './images/girassol.png',
                'descricao' => 'O girassol é uma planta alta com flores grandes e amarelas que seguem o movimento do sol. Suas sementes são comestíveis e usadas para produzir óleo. É símbolo de alegria e luz.',
                'categoria' => 'Flores',
                'cuidados' => 'Necessita de luz solar direta, solo bem drenado e rega regular.'
            ],
            6 => [
                'nome' => 'Vaso de Gérbera',
                'preco' => 50.00,
                'imagem' => './images/gerbera.png',
                'descricao' => 'A gérbera é uma flor vibrante e colorida, conhecida por suas pétalas grandes e simétricas. Ela se assemelha a uma margarida e vem em várias cores, como vermelho, laranja, rosa, amarelo e branco.',
                'categoria' => 'Flores',
                'cuidados' => 'A gérbera precisa de luz indireta, solo bem drenado e rega regular. Mantenha-a em temperaturas amenas e fertilize mensalmente. Retire flores murchas e cuide de pragas como pulgões.'
            ],
            7 => [
                'nome' => 'Vassoura para Grama',
                'preco' => 30.00,
                'imagem' => './images/vassoura.png',
                'descricao' => 'A vassoura para grama é ideal para varrer folhas e detritos em jardins e áreas externas. Com cerdas resistentes e design ergonômico, oferece conforto e eficiência na limpeza de gramados e calçadas.',
                'categoria' => 'Ferramentas'
            ],
            8 => [
                'nome' => 'Pazinha para Jardim',
                'preco' => 30.00,
                'imagem' => './images/pazinha.png',
                'descricao' => 'A pazinha de jardim é uma ferramenta prática para plantar, transplantar e cuidar de pequenas plantas. Com lâmina resistente e cabo ergonômico, facilita o trabalho em áreas menores e de difícil acesso. Ideal para jardineiros iniciantes e experientes.',
                'categoria' => 'Ferramentas'
            ],
        ];
    }

    public function index() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        
        if ($id) {
            header("Location: ../views/detalhes.php?id=" . $id);
            exit;
        }
        
        return $this->produtos;
    }

    public function getDetalhes($id) {
        return isset($this->produtos[$id]) ? $this->produtos[$id] : null;
    }

    public function listarTodos() {
        return $this->produtos;
    }
}