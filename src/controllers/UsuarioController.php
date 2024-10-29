<?php 

    namespace MeuProjeto\controllers;
    use MeuProjeto\configuration\ConnectionFactory;
    //require '/../configuration/ConnectionFactory.php'; 

    class UsuarioController {
       // public function index()
      //  {
         //   header ("Location: ./../views/cadastro&login.php");
       // }

        public function store($pegainfo)
        {

            # Pega os valores para armazenar no banco
            $nome = $pegainfo['nome'];
            $senha = $pegainfo['senha'];
            $senha2 = $pegainfo['senha2'];
            $endereco = $pegainfo['endereco'];
            $email = $pegainfo['email'];
            $numcell = $pegainfo['numcell'];

            if ($senha != $senha2) {
                print "As senhas não coincidem!";
                return;
            }

            # Cria a conexão com o banco
            $connection = ConnectionFactory::getConnection();

            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            # Prepara a query de inserção
            $stmt = $connection->prepare("INSERT INTO usuarios (nome, senha, senha2, endereco, email, numcell) VALUES (:nome, :senha, :senha2, :endereco, :email, :numcell)");

            # Verifica se a query foi preparada com sucesso
            if (!$stmt) {
                die("Falha na preparação da query: " . $connection->errorInfo()[2]);
            }

            # Verifica se a conexão foi estabelecida com sucesso
            if (!$connection) {
                die("Conexão falhou: " . $connection->errorInfo()[2]);
            }

            # Verifica se o método de requisição é POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $pegainfo = $_POST;
            }

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':senha', $senhaHash);
            $stmt->bindParam(':senha2', $senha2);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':numcell', $numcell);

            $stmt->execute();

            if ($stmt->rowCount()){
                echo "Cadastro realizado com sucesso!";
                header("Location: ./../views/menu.php");
            } else {
                echo "Erro ao cadastrar!";
            }

            // Debugging 
            var_dump($nome);
            var_dump($senha);
            var_dump($senha2);
            var_dump($endereco);
            var_dump($email);
            var_dump($numcell);
    }

        public function login($pegainfo) {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $pegainfo = $_POST;
            }

            $nome = $pegainfo['nome'];
            $senha = $pegainfo['senha'];

            $connection = ConnectionFactory::getConnection();

            $query = "SELECT * FROM usuarios WHERE nome = :nome";
            $stmt = $connection->prepare($query);

            $stmt->bindParam(':nome', $nome);

            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

                //var_dump("Chegou aqui?");
                if (password_verify($senha, $usuario['senha'])) {
                    echo "Login bem-sucedido!";
                    header("Location: ./../views/menu.php");
                    exit();
                } else {
                    echo "Senha incorreta.";
                }
            } else {
                echo "Usuário não encontrado.";
            }

        }    

    }

?>