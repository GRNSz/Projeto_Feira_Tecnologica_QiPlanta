<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/carrinho.css">
    <script src="./../javascript/carrinhocompras.js"></script>
</head>

<body>
<header>
    <?php include('header.php'); ?>
</header>
<main>
    <div class="div-carrinho-compras">
        <center>
            <h1>Meu carrinho de compras!</h1>
        </center>
        <div class="lista-produto-carrinho">
            <center>
                <h2>Esqueceu alguma coisa? Não se preocupe.<br> Pode voltar lá! Estaremos aqui</h2>
            </center>
            <ul class="lista-carrinho" style="list-style: none;" id="minha-lista">
                <center>
                    <button type="button" onclick="adicionarProduto()">Adicionar Produto</button>
                </center>
                <div style="margin-top: 40px;" id="mensagem-vazia">
                    <center>
                        <h2>O carrinho de compras esta vazio :(</h2>
                    </center>
                </div>
            </ul>
        </div>
    </div>
</main>
<footer>
    <?php include("footer.php") ?>
</footer>
</body>

</html>