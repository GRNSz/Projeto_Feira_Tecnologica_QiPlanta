<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="css/cadastro_produto.css">
</head>

<body>
    <div class="container">
        <h2>Cadastro de Produto</h2>
        <form action="processa_cadastro.php" method="post">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" id="nome_produto" name="nome_produto" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricao" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" id="quantidade" name="quantidade" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" id="preco" name="preco" step="0.01" required>
                </d>
                <div class="form-group">
                    <label for="tipo">Tipo de Produto: </label>
                    <input type="text" id="tipo" name="tipo" required>
                </div>
                <div class="form-group">
                    <button type="submit">Cadastrar</button>
                </div>
        </form>
    </div>

    <?php

    // Inclui o autoload do Composer
    require __DIR__ . "/../../vendor/autoload.php";
    require __DIR__ . "/../persistence/connectionFactory.php";

    use MeuProjeto\model\CadastrarProduto;
    //use MeuProjeto\persistence\ConnectionFactory;

    // Cria uma instância da classe Cadastrar
    $cadastrarProduto = new CadastrarProduto();

    // Chama o método getCadastrar
    $cadastrarProduto->getCadastrarProduto();

    ?>

</body>

</html>