<!DOCTYPE html>
<html>

<head>
    <title>Tela de Cadastro</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/cadastro&login.css" />
    <link rel="stylesheet" href="./css/menu.css" />
</head>

<body>
    <header>
        <div class="logo">
            <a href="./menu.php"><img src="./images/QiPlanta.png" alt="Logo do Marketplace"></a>
        </div>
        <nav>
            <ul>
                <li><a href="./../index.php">Login</a></li>
                <li><a href="menu.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="divisoria-login" style="color:antiquewhite;">
                <div>

                    <form action="./../controllers/mainController.php?r=UsuarioController&action=store" method="POST">
                        <h1>Cadastro de Cliente </h1><br>

                        <label for="username">Nome de Usuário:</label><br>
                        <input class="form-input" type="text" id="nome" name="nome" placeholder="Insira um nome de usuário" required><br><br>

                        <label for="username">Endereço:</label><br>
                        <input class="form-input" type="text" id="endereco" name="endereco" placeholder="Digite o seu Endereço" required><br><br>

                        <label for="username">Email:</label><br>
                        <input class="form-input" type="text" id="email" name="email" placeholder="Insira o seu e-mail" required><br><br>

                        <label for="username">Numero do Celular:</label><br>
                        <input class="form-input" type="number" id="numcell" name="numcell" placeholder="(xx) xxx xxx xxx" required><br><br>

                        <label for="password">Senha:</label><br>
                        <input class="form-input" type="password" id="senha" name="senha" placeholder="Insira uma senha" required>

                        <label for="password">Repita sua senha:</label><br>
                        <input class="form-input" type="password" id="senha2" name="senha2" placeholder="Confirme sua senha" required><br><br>

                        <input type="checkbox" name="robot" id="robot" required>
                        <label>Não sou um robo</label>

                        <div style="left:10px;">
                            <button class="login-btn" id="btn-cadastro" type="submit" value="Cadastrar">Cadastrar</button>
                        </div>
                    </form>
                </div>
                <div class="divisoria-cadastro-login">
                    <center>
                        <img src="./images/QiPlanta.png" alt="Logo do Marketplace" style="height: 200px; margin-top: 40px;">
                        <p>Ja possui uma conta? <br></p> <br>
                        <a href="./../index.php">
                            <button type="button" class="login-btn">Login</button>
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include("footer.php") ?>
    </footer>

    <?php
    // Inclui o autoload do Composer
    require __DIR__ . "/../../vendor/autoload.php";
    require __DIR__ . "/../persistence/connectionFactory.php";

    include 'valida_cadastro.php';

    use MeuProjeto\models\Cadastrar;
    //use MeuProjeto\persistence\ConnectionFactory;

    // Inclui a classe Usuario
    require_once __DIR__ . "/../model/Usuario.php";
    require_once __DIR__ . "/../controller/UsuarioController.php";
    require_once __DIR__ . "/../controller/mainController.php";

    use MeuProjeto\models\Usuario;

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        // Captura os dados do formulário
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $numcell = $_POST['numcell'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        // Cria uma instância da classe valida_cadastro
        $validador = new ValidaCadastro($nome, $endereco, $email, $numcell, $senha, $senha2);
        $validador->ValidaCadastro();

    }
    // Chama o método getUsuario
   // $usuario->getUsuario();
   // $usuario->getSenha();
    ?>

</body>

</html>
<?php
ob_end_flush(); // Envia a saída
?>