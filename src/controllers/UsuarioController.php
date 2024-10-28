<?php 

    namespace MeuProjeto\controllers;
    use MeuProjeto\persistence\ConnectionFactory;

    class UsuarioController {
       // public function index()
      //  {
         //   header ("Location: ./../views/cadastro&login.php");
       // }

        public function store($pegainfo)
        {
 
            // Cria uma conexão com o banco de dados
            $connection = ConnectionFactory::getConnection();

            // Verifica se a conexão foi bem-sucedida
            if (!$connection) {
                die("Conexão falhou: " . $connection->errorInfo()[2]);
            }

            // Prepara a query para evitar SQL Injection
            $sqlInsert = $connection->prepare("INSERT INTO usuarios (nome, senha, senha2, endereco, email, numcell) VALUES (?, ?, ?, ?, ?, ?)");

            // Verifica se a preparação da query foi bem-sucedida

            if (!$sqlInsert) {
                die("Falha na preparação da query: " . $connection->errorInfo()[2]);
            }

            $nome = $pegainfo['nome'];
            $senha = $pegainfo['senha'];
            $senha2 = $pegainfo['senha2'];
            $endereco = $pegainfo['endereco'];
            $email = $pegainfo['email'];
            $numcell = $pegainfo['numcell'];

            // Debugging
            
            $sqlInsert->bindParam(1, $pegainfo['nome']);
            $sqlInsert->bindParam(2, $pegainfo['senha']);
            $sqlInsert->bindParam(3, $pegainfo['senha2']);
            $sqlInsert->bindParam(4, $pegainfo['endereco']);
            $sqlInsert->bindParam(5, $pegainfo['email']);
            $sqlInsert->bindParam(6, $pegainfo['numcell']);
            
        }

    }
?>