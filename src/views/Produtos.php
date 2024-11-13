<?php
require_once __DIR__ . '/../controllers/ProdutoController.php';

use MeuProjeto\controllers\ProdutoController;

$controller = new ProdutoController();
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Verifica se o ID é válido
if ($id === null || !is_numeric($id)) {
    // Exibe uma mensagem de erro
    echo "ID do produto inválido.";
    exit;
}

$produto = $controller->getDetalhes($id);

// Verifica se o produto foi encontrado
if (!$produto) {
    // Exibe uma mensagem de erro
    echo "Produto não encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($produto['nome']); ?> | Detalhes do Produto</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="css/detalhes.css">
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>

    <main>
        <section class="detalhes-produto">
            <div class="produto">
                <div class="produto-imagem">
                    <img src="<?php echo htmlspecialchars($produto['imagem']); ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>" class="produto-img">
                </div>

                <div class="produto-info">
                    <h1 class="produto-titulo"><?php echo htmlspecialchars($produto['nome']); ?></h1>
                    <div class="preco">
                        R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
                    </div>

                    <div class="info-section">
                        <h3>Descrição</h3>
                        <p><?php echo htmlspecialchars($produto['descricao']); ?></p>
                    </div>

                    <?php if (isset($produto['cuidados'])): ?>
                    <div class="info-section">
                        <h3>Cuidados Especiais</h3>
                        <p><?php echo htmlspecialchars($produto['cuidados']); ?></p>
                    </div>
                    <?php endif; ?>

                    <div class="info-section">
                        <h3>Categoria</h3>
                        <p><?php echo htmlspecialchars($produto['categoria']); ?></p>
                    </div>

                    <button class="adicionar-carrinho" onclick="window.location.href='carrinho.php?add=<?php echo $id; ?>'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                        </svg>
                        Adicionar ao Carrinho
                    </button>
                </div>
            </div>
        </section>

        <?php if (isset($produto['video'])): ?>
        <div class="produto-video">
            <h2>Conheça mais sobre <?php echo htmlspecialchars($produto['nome']); ?></h2>
            <div class="video-container">
                <iframe width="510" height="230" 
                    src="https://www.youtube.com/embed/<?php echo htmlspecialchars($produto['video']); ?>" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <?php endif; ?>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
    <script src="./javascript/carrinhocompras.js"></script>
</body>
</html>