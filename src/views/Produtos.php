<?php
require_once __DIR__ . '/../controllers/ProdutoController.php';

use MeuProjeto\controllers\ProdutoController;

$controller = new ProdutoController();
$produtos = $controller->listarTodos();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - Produtos</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/menu.css">
    <script src="./javascript/detalhesProdutos.js"></script>
</head>

<body>
    <header>
        <?php include "./header.php" ?>
    </header>
    <main>
        <section class="anuncios">
            <center>
                <h2>Nossos Produtos</h2>
            </center>
            <div class="produtos-container">
                <?php foreach ($produtos as $id => $produto): ?>
                    <div class="produto">
                        <center>
                            <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                            <h3><?php echo $produto['nome']; ?></h3>
                            <p><?php echo $produto['descricao']; ?></p>
                            <p><strong>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></strong></p>
                            <button onclick="window.location.href='detalhes.php?id=<?php echo $id; ?>'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
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
        <?php include("./footer.php") ?>
    </footer>
</body>

</html>