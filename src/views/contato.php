<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/contato.css">
</head>

<body>
    <header>
        <?php include("./header.php") ?>
    </header>

    <main>
        <div class="container">
            <h1>Entre em Contato Conosco</h1>
            <p>Se você tem alguma dúvida, sugestão ou deseja saber mais sobre nossos produtos, entre em contato preenchendo o formulário abaixo:</p>

            <form method="POST" action="enviarContato.php">
                <input class="form-input" type="text" name="nome" placeholder="Digite seu nome" required>
                <input class="form-input" type="email" name="email" placeholder="Digite seu email" required>
                <input class="form-input" type="text" name="assunto" placeholder="Assunto" required>
                <textarea style="resize: vertical" class="form-input" name="mensagem" placeholder="Escreva sua mensagem aqui..." required></textarea>
                <button type="submit" class="login-btn">Enviar</button>
            </form>
        </div>
    </main>

    <footer>
        <?php include "./footer.php"; ?>
    </footer>

    <?php
    //os bugs do footer são por causa desses phps nos finais //
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
</body>

</html>