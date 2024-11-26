<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu do Usuário</title>
    <link rel="icon" href="images/icons8-pinheiro-16.png" type="image/png">
    <link rel="stylesheet" href="css/menu_do_Usuario.css">
</head>

<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    <main>
        <div class="caixa-conteudo">
            <h2>Dados do Usuário</h2>
            <label for="nome">Nome: </label>
            <p></p>
            <label for="email">Email: </label>
            <p></p>
            <label for="endereco">Endereço: </label>
            <p></p>
            <label for="telefone">Telefone: </label>
            <p></p>
            <label for="senha">Senha: </label>
            <p></p> 
            <button class="alterarSenha-btn">Alterar senha</button>
    </main>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>

</html>