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
        <?php include("header.php") ?>
    </header>
    <main>
        <div class="container-cadastro">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h1>Cadastro de Cliente </h1><br>           
                    
                    <label for="username">Nome de Usuário:</label><br>
                    <input class="form-input" type="text" id="username" name="nome" placeholder="Insira um nome de usuário" required><br><br>
                    
                    <label for="username">Endereço:</label><br>
                    <input class="form-input" type="text" id="endereco" name="endereco" placeholder="Digite o seu Endereço" required><br><br>
                
                    <label for="username">Email:</label><br>
                    <input class="form-input" type="text" id="email" name="email" placeholder="Insira o seu e-mail" required><br><br>
                
                    <label for="username">Numero do Celular:</label><br>
                    <input class="form-input" type="number" id="numcell" name="numcell" placeholder="(xx) xxx xxx xxx" required><br><br>

                    <label for="password">Senha:</label><br>
                    <input class="form-input" type="password" id="password" name="senha" placeholder="Insira uma senha" required>

                    <label for="password">Repita sua senha:</label><br>
                    <input class="form-input" type="password" id="password" name="senha2" placeholder="Confirme sua senha" required><br><br>
                        
                    <input type="checkbox" name="robot" id="robot" required>
                    <label>Não sou um robo</label>
                    
                        <div style="left:10px;">
                        <button class="cadastro-btn" type="submit" value="Cadastrar">Cadastrar</button>
                        </div>

            </form>
        </div>
    </main>

    
    
    <?php

    // Inclui o autoload do Composer
    require __DIR__ . "/../../vendor/autoload.php";
    require __DIR__ . "/../persistence/connectionFactory.php";

    use MeuProjeto\model\Cadastrar;
    //use MeuProjeto\persistence\ConnectionFactory;

    // Cria uma instância da classe Cadastrar
    $cadastrar = new Cadastrar();

    // Chama o método getCadastrar
    $cadastrar->getCadastrar();

        ?>

</body>
</html>

<?php
ob_end_flush(); // Envia a saída
?>