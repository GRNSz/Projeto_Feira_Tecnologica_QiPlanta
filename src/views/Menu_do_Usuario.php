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
            <?php include("user_data.php"); ?>
            <h2>Cadastrar Endereço</h2>
            <form action="cadastrar_endereco.php" method="post">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </main>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>

</html>