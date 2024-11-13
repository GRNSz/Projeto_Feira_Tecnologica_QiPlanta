<?php
// Inclui o arquivo do controlador de produtos
require_once __DIR__ . '/../controllers/ProdutoController.php';

// Usa o namespace do controlador de produtos
use MeuProjeto\controllers\ProdutoController;

// Cria uma instância do controlador de produtos
$controller = new ProdutoController();

// Chama o método para listar todos os produtos
$produtos = $controller->listarTodos();

// Tudo funciona agora!! 

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - Produtos</title>
    <!-- Ícone do site -->
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <!-- Arquivo CSS para o menu -->
    <link rel="stylesheet" href="./css/menu.css">
    <!-- Arquivo JavaScript para detalhes dos produtos -->
    <script src="./javascript/detalhesProdutos.js"></script>
</head>

<body>
    <header>
        <!-- Inclui o cabeçalho da página -->
        <?php include "./header.php" ?>
    </header>
    <main>
        <section class="anuncios">
            <center>
                <h2>Nossos Produtos</h2>
            </center>
            <div class="produtos-container">
                <!-- Loop através dos produtos e exibe cada um -->
                <?php foreach ($produtos as $id => $produto): ?>
                    <div class="produto">
                        <center>
                            <!-- Exibe a imagem do produto -->
                            <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                            <!-- Exibe o nome do produto -->
                            <h3><?php echo $produto['nome']; ?></h3>
                            <!-- Exibe a descrição do produto -->
                            <p><?php echo $produto['descricao']; ?></p>
                            <!-- Exibe o preço formatado do produto -->
                            <p><strong>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></strong></p>
                            <!-- Botão para ver detalhes do produto -->
                            <button onclick="window.location.href='detalhes.php?id=<?php echo $id; ?>'"></button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"></svg>
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                </svg>
                                Ver Detalhes
                            </button>
                        </center>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer>
        <!-- Inclui o rodapé da página -->
        <?php include("./footer.php") ?>
    </footer>
</body>

</html>