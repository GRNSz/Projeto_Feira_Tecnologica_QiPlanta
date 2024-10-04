<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <link rel="icon" href="views/images/icons8-pinheiro-162.png" type="image/png"> <!--Icon -->
    <link rel="stylesheet" href="views/css/cadastro&login.css">
<head>
    <header>
        <?php include("./views/header.php")  ?>
    </header>
    <main>

        <div class="container">
            <div class="divisoria-login">
                <div class="div-login-centro"><!--[Pedro]: parte 01 caixa btn cadastro / img/color -->
                <div class="caixa-cadastro-login">
                    <div style="margin-top:60px;"></div>
                    <h2>Cadastrar-se</h2> <br>
                    <p>Ainda não possui Login em nosso site? <br> <strong>Venha se cadastrar</strong></p>     <!--[Pedro]: texto teste, podem escolher oque colocar-->    
                </div>
                <div class="div-btn-cadastro-login">
                <button type="button" class="btn-cadastro-login" onclick="window.location.href = './views/TelaCadastro.php'">Cadastrar</button>
                </div>
            </div>
            <div style="padding-left: 10px; padding-top:60px; margin:10px"> <!--[Pedro]: Parte 02 - login -->
                <div class="titulo-login">
                    <h1>Login</h1>
                </div>
                
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input class="form-input" type="text" name="usuario" placeholder="Digite o nome do Usuario" required>
<input class="form-input" type="password" name="senha" placeholder="Digite a Senha" required>


<button type="submit" class="login-btn">Login</button>
</form>

</div>
        </div>
        
        
        </main>
        <?php


//Este código abaixo exibe os erros que o PHP der na tela do usuário propositalmente, para que assim possam fazer a verificação manual do problema que possa estar ocorrendo.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

        //include("main.php");

        // Usa a classe Login do namespace MeuProjeto\Login     
        include (__DIR__ . '/../vendor/autoload.php'); 
        use MeuProjeto\model\Login; 
        //use MeuProjeto\model\UsuarioSistema;

        // Instancia a classe Login
        $login = new Login(); 
        //$sysu = new MeuProjeto\model\UsuarioSistema();

        // Verifica o login (se o formulário foi enviado)
        $login->verificarLogin(); 
        //$sysu->nome = "GustavoR";
        ?>
    </div>
</head>
</body>
</html>