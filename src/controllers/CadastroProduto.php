<?php 

    namespace MeuProjeto\controllers; 

    use MeuProjeto\configuration\ConnectionFactory;

    class CadastroProduto {

        public function cadastraProd($pegainfo)
        {
            # Pega os valores para armazenar no banco
            $nome = $pegainfo['nome'];
            $preco = $pegainfo['preco'];
            $quantidade = $pegainfo['quantidade'];
            $descricao = $pegainfo['descricao'];
            $categoria = $pegainfo['categoria'];
            $imagem = $pegainfo['imagem'];

            # Cria a conexão com o banco
            $connection = ConnectionFactory::getConnection();

            # Prepara a query de inserção
            $stmt = $connection->prepare("INSERT INTO produtos (nome, preco, quantidade, descricao, categoria, imagem) VALUES (:nome, :preco, :quantidade, :descricao, :categoria, :imagem)");

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
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':quantidade', $quantidade);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':categoria', $categoria);
            $stmt->bindParam(':imagem', $imagem);

            $stmt->execute();
        }

    }    