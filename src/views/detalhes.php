<?php
// Importação do controlador de produtos
require_once __DIR__ . '/../controllers/ProdutoController.php';

// Namespace do controlador
use MeuProjeto\controllers\ProdutoController;

// Inicializa a sessão
session_start();

// Inicialização do controlador e obtenção do ID do produto da URL
$controller = new ProdutoController();
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$produto = $controller->getDetalhes($id);

// Redirecionamento caso o produto não seja encontrado
if (!$produto) {
    header('Location: Produtos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto - <?php echo htmlspecialchars($produto['nome']); ?></title>
    <link rel="stylesheet" href="./css/detalhes.css">
</head>

<body>
    <header>
        <?php include("./header.php"); ?>
    </header>

    <section class="detalhes-produto">
        <div class="produto">
            <img src="<?php echo htmlspecialchars($produto['imagem']); ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>" class="produto-img">
            <div class="produto-detalhes">
                <h1><?php echo htmlspecialchars($produto['nome']); ?></h1>
                <p><strong>Preço:</strong> R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                <p><strong>Descrição:</strong> <?php echo htmlspecialchars($produto['descricao']); ?></p>
                <?php if (isset($produto['cuidados'])): ?>
                    <p><strong>Cuidados:</strong> <?php echo htmlspecialchars($produto['cuidados']); ?></p>
                <?php endif; ?>
                <?php if (isset($produto['categoria'])): ?>
                    <p><strong>Categoria:</strong> <?php echo htmlspecialchars($produto['categoria']); ?></p>
                <?php endif; ?>

                <!-- Botão para adicionar ao carrinho -->
                <button class="adicionar-carrinho" onclick="window.location.href='carrinho.php?add=<?php echo $id; ?>'">
                    Adicionar ao Carrinho
                </button>
            </div>
        </div>
    </section>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>
