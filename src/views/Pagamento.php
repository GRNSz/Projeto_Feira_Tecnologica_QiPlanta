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
// ... (o restante do seu código permanece o mesmo)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <link rel="stylesheet" href="./css/pagamento.css">
    <title>Pagamento</title>
</head>

<body>

    <div class="lista-produto-carrinho">
        <ul class="lista-carrinho" style="list-style: none;">
            <?php if (!empty($_SESSION['carrinho'])): ?>
                <?php
                $totalGeral = 0; // Inicializa o total geral
                foreach ($_SESSION['carrinho'] as $idProduto => $quantidade):
                    // Busca os detalhes do produto pelo ID
                    $produto = $controller->getDetalhes($idProduto);

                    // Verifica se o produto foi encontrado
                    if (!$produto): ?>
                        <?php
                        // Removendo automaticamente esse intruso!
                        unset($_SESSION['carrinho'][$idProduto]);
                        ?>
                    <?php else:
                        $subtotal = $produto['preco'] * $quantidade;
                        $totalGeral += $subtotal; // Adiciona o subtotal ao total geral
                    ?>
                        <li class="produto">
                            <center>

                                <h3>Produto:
                                    <strong> <?php echo htmlspecialchars($produto['nome']); // Sem SQL Injection, por favor! 
                                                ?></strong>
                                </h3>
                                <img src="<?php echo htmlspecialchars($produto['imagem']); ?>">
                                <p>Quantidade:<br> <b><?php echo $quantidade; ?></b></p>
                                <p>Preço Unitário: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                                <p>Subtotal: <b style="color:#3f9442;">R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></b></p>
                            </center>

                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
                <center>
                    <h2>Total Geral: R$ <?php echo number_format($totalGeral, 2, ',', '.'); ?></h2>
                </center>
            <?php else: ?>
                <div>
                    <center style="display:flex">
                        <h2>O carrinho de compras está vazio :(
                            <!--<span style='font-size:100px;font-size:35px;'>&#129402;</span>-->
                        </h2> <br><!-- Vamos lá, encha isso de produtos! -->
                    </center>
                </div>
            <?php endif; ?>
        </ul>
    </div>
    </div>

    <form id="form-checkout">
        <div id="form-checkout__cardNumber" class="container"></div>
        <div id="form-checkout__expirationDate" class="container"></div>
        <div id="form-checkout__securityCode" class="container"></div>
        <input type="text" id="form-checkout__cardholderName" />
        <select id="form-checkout__issuer"></select>
        <select id="form-checkout__installments"></select>
        <select id="form-checkout__identificationType"></select>
        <input type="text" id="form-checkout__identificationNumber" />
        <input type="email" id="form-checkout__cardholderEmail" />

        <button type="submit" onclick="window.location.href='obrigado_pedido.php'" id="form-checkout__submit">Pagar</button>
        <progress value="0" class="progress-bar">Carregando...</progress>
    </form>
    <script src="./../javascript/formpagamento.js"></script>
</body>

</html>