<!DOCTYPE html>
<html>

<head>
    <title>Tela de Cadastro</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/cadastro&login.css" />
    <link rel="stylesheet" href="./css/header.css" />
</head>

<body>
    <header>
        <div class="logo">
            <a href="./menu.php"><img src="./images/QiPlanta.png" alt="Logo do Marketplace"></a>
        </div>
        <nav>
            <ul>
                <li><a href="./login.php">Login</a></li>
                <li><a href="menu.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container-cadastro">
            <div class="divisoria" style="color:antiquewhite;">
                <div> <!-- forms -->

                    <form action="./../controllers/mainController.php?r=UsuarioController&action=store" method="POST">
                            <center>
                                <h1>Cadastro de Cliente </h1><br>
                            </center>

                            <label for="username">Nome de Usuário:</label><br>
                            <input class="form-input" type="text" id="nome" name="nome" placeholder="Insira um nome de usuário" required>
                            
                            <label for="username">Endereço:</label><br>
                        <input class="form-input" type="text" id="endereco" name="endereco" placeholder="Digite o seu Endereço" required>
                        
                        <label for="username">Email:</label><br>
                        <input class="form-input" type="text" id="email" name="email" placeholder="Insira o seu e-mail" required>
                        
                        <label for="username">Numero do Celular:</label><br>
                        <input class="form-input" type="number" id="numcell" name="numcell" placeholder="(xx) xxx xxx xxx" required>
                        
                        <div class="divisoria">
                            <div><!--senha -->
                                <label for="password">Senha:</label><br>
                                <input class="form-input" type="password" id="senha" name="senha" placeholder="Insira uma senha" required>
                            </div>

                            <div><!--confirmar senha -->
                                <label for="password">Repita sua senha:</label><br>
                                <input class="form-input" type="password" id="senha2" name="senha2" placeholder="Confirme sua senha" required>
                            </div>
                        </div>
                        
                        
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
                        <a href="./login.php">
                            <button type="button" class="login-btn">Login</button>
                        </a>
                    </center>
                </div>
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
    require __DIR__ . "/../configuration/ConnectionFactory.php";
    ?>

</body>

</html>
<?php
ob_end_flush(); // Envia a saída
?>