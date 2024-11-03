<?php 

    namespace MeuProjeto\controllers; 

    use MeuProjeto\configuration\ConnectionFactory;

    class CadastroProduto {

        public function cadastra($pegainfo)
        {
            # Pega os valores para armazenar no banco
            $nomeProduto = $pegainfo['nomeProduto'];
            $precoProduto = $pegainfo['precoProduto'];
            $quantidadeProduto = $pegainfo['quantidadeProduto'];
            $descricaoProduto = $pegainfo['descricaoProduto'];
        
            # Cria a conexão com o banco
            $connection = ConnectionFactory::getConnection();

            # Prepara a query de inserção
            $stmt = $connection->prepare("INSERT INTO produtos (nomeProduto, precoProduto, quantidadeProduto, descricaoProduto) VALUES (:nomeProduto, :precoProduto, :quantidadeProduto, :descricaoProduto)");

            # Verifica se a query foi preparada com sucesso
            if (!$stmt) {
                die("Falha na preparação da query: " . $connection->errorInfo()[2]);
            }

            # Verifica se a conexão foi estabelecida com sucesso
            if (!$connection) {
                die("Conexão falhou: " . $connection->errorInfo()[2]);
            }

            # Verifica se o método de requisição é POST
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $pegainfo = $_POST;
            }

            $stmt->bindParam(':nome', $nomeProduto);
            $stmt->bindParam(':preco', $precoProduto);
            $stmt->bindParam(':quantidade', $quantidadeProduto);
            $stmt->bindParam(':descricao', $descricaoProduto);

            $stmt->execute();

            if ($stmt->rowCount()){
                echo "Cadastro realizado com sucesso!";
                header("Location: ./../views/menu.php");
            } else {
                echo "Erro ao cadastrar!";
            }
        }

    }    