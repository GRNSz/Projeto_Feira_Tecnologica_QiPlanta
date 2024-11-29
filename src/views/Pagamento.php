<?php
use MeuProjeto\controllers\ProdutoController;
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
    <?php
session_start();
require_once __DIR__ . '/../controllers/ProdutoController.php';

$controller = new ProdutoController();
$totalGeral = 0;

if (!empty($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $idProduto => $quantidade) {
        $produto = $controller->getDetalhes($idProduto);
        if ($produto) {
            $subtotal = $produto['preco'] * $quantidade;
            $totalGeral += $subtotal;
        }
    }
}
?>
    <div class="total-container">
    <h2>Total da compra: R$ <?php echo number_format($totalGeral, 2, ',', '.'); ?></h2>
</div>
    <script src="./../javascript/formpagamento.js"></script>
</body>

</html>


