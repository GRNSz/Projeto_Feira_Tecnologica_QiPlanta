<?php
session_start(); // Inicia a sessão para o carrinho (sim, mais um motivo para não fechar o navegador!)

require_once __DIR__ . '/../controllers/ProdutoController.php'; // Não ouse remover, sério!
use MeuProjeto\controllers\ProdutoController;

// Inicializa o controlador
$controller = new ProdutoController(); // Nosso herói que busca produtos!

// Inicializa o carrinho se não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = []; // A vida começa com um carrinho vazio...
}

// Verifica se há um produto para adicionar
if (isset($_GET['add'])) {
    $idProduto = (int)$_GET['add'];

    // Apenas IDs válidos (> 0) podem ser adicionados
    if ($idProduto > 0) {
        if (isset($_SESSION['carrinho'][$idProduto])) {
            $_SESSION['carrinho'][$idProduto]++;
        } else {
            $_SESSION['carrinho'][$idProduto] = 1; // Primeira vez adicionando este produto? Bem-vindo ao carrinho!
        }
    } else {
        // Alguém tentou adicionar algo suspeito? Não, obrigado!
        echo "ID inválido, você não vai hackear o carrinho hoje!";
    }

    header('Location: carrinho.php'); // Porque ninguém gosta de recarregar a página manualmente!
    exit;
}

// Verifica se há um produto para remover
if (isset($_GET['remove'])) {
    $idProduto = (int)$_GET['remove'];

    if ($idProduto > 0 && isset($_SESSION['carrinho'][$idProduto])) {
        $_SESSION['carrinho'][$idProduto]--; // Menos um no carrinho... adeus, produto!
        if ($_SESSION['carrinho'][$idProduto] <= 0) {
            unset($_SESSION['carrinho'][$idProduto]); // Bye-bye, item zerado!
        }
    }

    header('Location: carrinho.php'); // Porque, sério, redirecionar é mais fácil!
    exit;
}

// Remove IDs inválidos do carrinho automaticamente
foreach ($_SESSION['carrinho'] as $idProduto => $quantidade) {
    if ($idProduto <= 0) {
        unset($_SESSION['carrinho'][$idProduto]); // Este não deveria estar aqui... removido!
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
    <link rel="stylesheet" href="./css/carrinho.css"> <!-- Porque estilo é tudo! -->
</head>
<body>
<header>
    <?php include('header.php'); // Não mexa aqui, sério! ?>
</header>
<main>
    <div class="div-carrinho-compras">
        <center>
            <h1>Meu carrinho de compras!</h1> <!-- Uhul, olha que lindo seu carrinho! -->
        </center>
        <div class="lista-produto-carrinho">
            <ul class="lista-carrinho" style="list-style: none;">
                <?php if (!empty($_SESSION['carrinho'])): ?>
                    <?php foreach ($_SESSION['carrinho'] as $idProduto => $quantidade): ?>
                        <?php
                        // Busca os detalhes do produto pelo ID
                        $produto = $controller->getDetalhes($idProduto);

                        // Verifica se o produto foi encontrado
                        if (!$produto): ?>
                            <?php
                            // Removendo automaticamente esse intruso!
                            unset($_SESSION['carrinho'][$idProduto]);
                            ?>
                        <?php else: ?>
                            <li>
                                <p>Produto: <?php echo htmlspecialchars($produto['nome']); // Sem SQL Injection, por favor! ?></p>
                                <p>Quantidade: <?php echo $quantidade; ?></p>
                                <p>Preço Unitário: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                                <p>Subtotal: R$ <?php echo number_format($produto['preco'] * $quantidade, 2, ',', '.'); ?></p>
                                <button type="button" onclick="window.location.href='carrinho.php?add=<?php echo $idProduto; ?>'">+</button>
                                <button type="button" onclick="window.location.href='carrinho.php?remove=<?php echo $idProduto; ?>'">-</button>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div>
                        <center>
                            <h2>O carrinho de compras está vazio :(</h2> <!-- Vamos lá, encha isso de produtos! -->
                        </center>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</main>
<footer>
    <?php include("footer.php"); // Sério, não mexa nisso também! ?>
</footer>
</body>
</html>
