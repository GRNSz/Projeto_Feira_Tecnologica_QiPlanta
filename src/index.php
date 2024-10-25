<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./views/images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="views/css/cadastro&login.css">
    <link rel="stylesheet" href="views/css/menu.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="./views/menu.php"><img src="./views/images/QiPlanta.png" alt="Logo do Marketplace"></a> <!-- Substitua pelo caminho do seu logo -->
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Minha Conta</a></li>
                <li><a href="./views/Produtos.php">Produtos</a></li>
                <li><a href="./views/categorias.php">Categorias</a></li>
                <li><a href="./views/sobre.php">Sobre Nós</a></li>
                <li><a href="./views/contato.php">Contato </a></li>
                <li><a href="./views/carrinho.php">Carrinho</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <form action="pesquisa.php" method="GET">
                <input class="input-busca" type="text" name="query" placeholder="Pesquisar produtos..." required>
                <button type="submit">Buscar</button>
            </form>
        </div>
    </header>
    <main>
        <div class="background">
            <div class="container-login">
                <div class="divisoria-login">
                    <div class="div-login-centro"><!--[Pedro]-->
                        <div class="caixa-cadastro-login">
                            <h2>Cadastrar-se</h2><br>
                            <p>Ainda não possui uma conta em nosso site?<br> <strong>Venha se cadastrar</strong></p> <!--[Pedro]: texto teste, podem escolher oque colocar-->
                            <div class="div-btn-cadastro-login">
                                <button type="button" class="btn-cadastro-login" onclick="window.location.href = './views/cadastro&login.php'">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 10px; padding-top:60px; margin:10px">
                        <div class="titulo-login">
                            <center>
                                <h1>Login</h1>
                            </center>
                        </div>

                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input class="form-input" type="text" name="usuario" placeholder="Digite o nome do Usuario" required>
                            <input class="form-input" type="password" name="senha" placeholder="Digite a Senha" required>

                            <button type="submit" class="login-btn">Login</button>
                        </form>

                    </div>
                </div>
            </div>
    </main>
    <footer>
        <?php include("./../src/views/footer.php") ?>
    </footer>
</body>

<?php
    //Este código abaixo exibe os erros que o PHP der na tela do usuário propositalmente, para que assim possam fazer a verificação manual do problema que possa estar ocorrendo.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //include("main.php");
    // Usa a classe Login do namespace MeuProjeto\Login     
    include(__DIR__ . '/../vendor/autoload.php');

    use MeuProjeto\model\Login;
    //use MeuProjeto\model\UsuarioSistema;

    // Instancia a classe Login
    $login = new Login();
    //$sysu = new MeuProjeto\model\UsuarioSistema();

    // Verifica o login (se o formulário foi enviado)
    $login->verificarLogin();
    //$sysu->nome = "GustavoR";
?>


</html>