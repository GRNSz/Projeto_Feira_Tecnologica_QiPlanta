<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./views/images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="views/css/cadastro&login.css">
    <link rel="stylesheet" href="views/css/menu.css">
    <link rel="stylesheet" href="views/css/footer.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="./views/menu.php"><img src="./views/images/QiPlanta.png" alt="Logo do Marketplace"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Minha Conta</a></li>
                <li><a href="./views/Produtos.php">Produtos</a></li>
                <li><a href="./views/categorias.php">Categorias</a></li>
                <li><a href="./views/sobre.php">Sobre Nós</a></li>
                <li><a href="./views/contato.php">Contato</a></li>
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
            <div class="container">
                <div class="divisoria-login">
                    <div class="div-login-centro">
                        <div class="caixa-cadastro-login">
                            <h2 style="margin-top:15px;">Cadastrar-se</h2><br>
                            <p>Ainda não possui uma conta em nosso site?<br> <strong>Venha se cadastrar</strong></p>
                        </div>
                        <div class="div-btn-cadastro-login">
                            <button type="button" class="btn-cadastro-login" onclick="window.location.href = './views/cadastro&login.php'">Cadastrar</button>
                        </div>
                    </div>
                    <div style="padding-left: 10px; padding-top:60px; margin:10px">
                        <div class="titulo-login">
                            <h1>Login</h1>
                        </div>
                        <form action="./controllers/mainController.php?r=UsuarioController&action=login" method="POST">
                            <input class="form-input" type="text" name="nome" placeholder="Digite o nome do Usuario" required>
                            <input class="form-input" type="password" name="senha" placeholder="Digite a Senha" required>
                            <button type="submit" class="login-btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
    </main>
    <footer>
        <img style="border-radius:50%; height: 90px; width: 90px;" src="./views/images/QiPlanta.png" alt="Logo">
        <hr style="height:2px;border-width:0;color:gray;background-color:white;">
        <p>
            <a href="./views/menu.php" style="color: white; text-decoration: none; font-weight: bold;">Home</a>
            <br>
            <a href="./views/sobre.php" style="color: white; text-decoration: none; font-weight: bold;">Sobre</a>
            <br>
            <a href="./views/contato.php" style="color: white; text-decoration: none; font-weight: bold;">Contato</a>
        </p>
        <center>
            <p>
                <b>Todos os direitos reservados &copy; 2023 <b>
                        <i> - QiPlanta</i> <br>
                </b>
            </p>
        </center>
        <br>
        </div>
    </footer>

    <!-- <a href=" ./controllers/mainController.php?r=UsuarioController&action=index">TESTE</a> -->

</body>

<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../configuration/ConnectionFactory.php';
require_once __DIR__ . '/../controllers/UsuarioController.php';
require_once __DIR__ . '/../controllers/mainController.php';

?>
=======
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./views/images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="views/css/cadastro&login.css">
    <link rel="stylesheet" href="views/css/menu.css">
    <link rel="stylesheet" href="views/css/footer.css">
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
            <div class="container">
                <div class="divisoria-login">
                    <div class="div-login-centro"><!--[Pedro]-->
                        <div class="caixa-cadastro-login">
                            <h2 style="margin-top:15px;">Cadastrar-se</h2><br>
                            <p>Ainda não possui uma conta em nosso site?<br> <strong>Venha se cadastrar</strong></p> <!--[Pedro]: texto teste, podem escolher oque colocar-->
                        </div>
                        <div class="div-btn-cadastro-login">
                            <button type="button" class="btn-cadastro-login" onclick="window.location.href = './views/cadastro&login.php'">Cadastrar</button>
                        </div>
                    </div>
                    <div style="padding-left: 10px; padding-top:60px; margin:10px">
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
            </div>
    </main>
    <footer>
    <img style="border-radius:50%; height: 90px; width: 90px;" src="./views/images/QiPlanta.png" alt="Logo">
    <hr style="height:2px;border-width:0;color:gray;background-color:white;">

    <p>
      <a href="./views/menu.php"style=" color: white; text-decoration: none; font-weight: bold;">Home</a>
      <br>
      <a href="./views/sobre.php"style=" color: white; text-decoration: none; font-weight: bold;">Sobre</a>
      <br>
      <a href="./views/contato.php"style=" color: white; text-decoration: none; font-weight: bold;">Contato</a>
    </p>
    <center>
  <p>
    <b>
      Todos os direitos reservados &copy; 2023 <b>
        <i> - QiPlanta</i> <br>
    </b>
  </p>
      </center>
    <br>
  </div>
    </footer>

</body>

<?php

require_once(__DIR__ . '/../vendor/autoload.php');
require_once __DIR__ . '/../model/Login.php';
require_once __DIR__ . '/../model/Usuario.php';

//Este código abaixo exibe os erros que o PHP der na tela do usuário propositalmente, para que assim possam fazer a verificação manual do problema que possa estar ocorrendo.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./src/main.php";   
include "./../model/Login.php";

use MeuProjeto\model\Login;
use MeuProjeto\model\Usuario;

//use MeuProjeto\model\UsuarioSistema;

$login = new Login($arg1, $arg2); // Replace $arg1 and $arg2 with the actual arguments required by the Login constructor

?>

>>>>>>> 3b224059639604c3868ecad29549ea02b6f4bf62
</html>