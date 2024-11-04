<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./views/images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./views/css/cadastro&login.css">
    <link rel="stylesheet" href="./../../src/views/css/header.css">
</head>

<body>
    <header>
        <?php include('./views/header.php') ?>
    </header>
    <main>
        <div class="container-login">

            <div class="divisoria">
                <div class="div-login-cadastro">
                    <div class="caixa-cadastro-login">
                        <h2 style="margin-top:15px;">Cadastrar-se</h2><br>
                        <p>Ainda não possui uma conta em nosso site?</p> <!--[Pedro]: texto teste, podem escolher oque colocar-->
                    </div>
                    <div class="div-btn-cadastro-login">
                        <button type="button" class="btn-cadastro-login" onclick="window.location.href = './views/cadastro&login.php'">Cadastrar</button>
                    </div>
                </div>

                <div> <!-- Div do Form -->
                    <form action="./controllers/mainController.php?r=UsuarioController&action=login" method="POST">
                        <div class="titulo-login">
                            <center><h2>Login</h2></center>
                        </div>
                        
                        
                        
                        
                        <input class="form-input" type="text" name="nome" placeholder="Digite o nome do Usuario" required>
                        <input class="form-input" type="password" name="senha" placeholder="Digite a Senha" required>
                        <button type="submit" class="login-btn">Login</button>
                    </form>
                </div>
            </div>
        
    </main>
    <footer>
        <?php include("./views/footer.php") ?>
    </footer>
<?php
    /* Para corrigir dps, isso que sobe o footer
//Este código abaixo exibe os erros que o PHP der na tela do usuário propositalmente, para que assim possam fazer a verificação manual do problema que possa estar ocorrendo.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    //include("main.php");
    // Usa a classe Login do namespace MeuProjeto\Login     
    include(__DIR__ . '/../vendor/autoload.php');*/
?>

</body>
</html>