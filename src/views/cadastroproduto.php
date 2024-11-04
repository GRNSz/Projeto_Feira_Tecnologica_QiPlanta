<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="css/cadastro_produto.css">
    <script src = "./javascript/processaCadastro.js"></script>
    <style>
        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group label {
            text-align: center;
            width: 100%;
        }

        .form-group input {
            width: 100%;
            max-width: 300px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Cadastro de Produto</h2>
        <form action="./../controllers/mainController.php?r=CadastroProduto&action=cadastra" method="POST">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" id="nome_produto" name="nomeProduto" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricaoProduto" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" id="quantidade" name="quantidadeProduto" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" id="preco" name="precoProduto" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de Produto</label>
                <input type="text" id="tipo" name="tipo" required>
            </div>
            <div class="form-group">
                <button type="submit" onclick="enviaform()">Cadastrar</button>
                <div id="cadastraProduto"></div>
            </div>
        </form>
    </div>

    <?php

        require_once './controllers/mainController.php';
        require_once './controllers/CadastroProduto.php';

    ?>

</body>

</html>