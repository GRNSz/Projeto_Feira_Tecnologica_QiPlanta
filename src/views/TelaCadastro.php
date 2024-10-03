<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/cadastro&login.css">
</head>
<body>
    <div class="container-cadastro">
        <div class="divisoria-login">
        <div>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h1>Cadastro de Cliente </h1><br>   
                    <label for="username">Nome de Usuário:</label>
                    <input class="form-input" type="text" id="username" name="nome" placeholder="Insira um nome de usuário" required><br><br>
        
                    <label for="password">Senha:</label>
                    <input class="form-input" type="password" id="password" name="senha" placeholder="Insira uma senha" required><br><br>

                    <label for="password">Repita sua senha:</label>
                    <input class="form-input" type="password" id="password" name="senha2" placeholder="Confirme sua senha" required><br><br>

                 <div style="position: relative; right: 90px; z-index: 1;" >
                     <input type="checkbox" id="robot" name="robot" required>
                 </div> <!--[Pedro]: --[    AJUSTES, PERIGOSO EM ALTERAR NO DESIGN (RISCO DE BUGAR TUDO)    ] -->
                     <p  style="position: relative; top: -45px;" >Não sou um robo</p>
                    <div style="margin-top: -35px; left:10px;">
                        <input class="login-btn" type="submit" value="Cadastrar">
                    </div>
               
                    </form>
                </div>
                
                <div class="div-cadastro-centro"> <!--  div color/login -->
                    <div style="margin-top:60px;"></div>
                    <h2>Login</h2> <br>
                    <p>Ja possui Login em nosso site? <br>fazer login<br><br> <a href="./../index.php"><strong>Click aqui</strong></a></p>  <br> <!--[Pedro]: texto teste, podem escolher oque colocar-->
                    
                </div>
            </div>
            
        </div>
    </div>
   
 


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