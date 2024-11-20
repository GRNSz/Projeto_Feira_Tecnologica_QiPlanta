<?php 

    namespace MeuProjeto\controllers;
    use MeuProjeto\configuration\ConnectionFactory;
    use \PDOException;
    //require '/../configuration/ConnectionFactory.php'; 

    class UsuarioController {
       // public function index()
      //  {
         //   header ("Location: ./../views/cadastro&login.php");
       // }

       public function store() {
        try {
            $pdo = ConnectionFactory::getConnection();
            
            // Recebe os dados do formulário
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $senha2 = $_POST['senha2'];
            $endereco = $_POST['endereco'];
            $email = $_POST['email'];
            $numcell = $_POST['numcell'];
    
            // Hash das senhas
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $senhaHash2 = password_hash($senha2, PASSWORD_DEFAULT);
    
            // Query SQL modificada
            $sql = "INSERT INTO usuarios (nome, senha, senha2, endereco, email, numcell) 
                    VALUES (:nome, :senha, :senha2, :endereco, :email, :numcell)";
                    
            $stmt = $pdo->prepare($sql);
    
            // Verifica se o método de requisição é POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $pegainfo = $_POST;
            }
    
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':senha', $senhaHash);
            $stmt->bindParam(':senha2', $senhaHash2);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':numcell', $numcell);
    
            $stmt->execute();
    
            if ($stmt->rowCount()) {
                header("Location: ./../views/menu.php");
                exit();
            } else {
                echo "Erro ao cadastrar!";
            }
        } catch (PDOException $e) {
            error_log("Erro no cadastro: " . $e->getMessage());
            echo "Erro ao cadastrar. Por favor, tente novamente.";
        }
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
                    echo "<img src='./../views/images/ErroSenhaIncorreta.jpg' alt='Senha incorreta'>";
                }
            } else {
                echo "Usuário não encontrado.";
            }

        }    

    }

?>