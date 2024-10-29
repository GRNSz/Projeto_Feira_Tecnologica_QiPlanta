<?php


            # Verifica se o método de requisição é POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $pegainfo = $_POST;
            }

            
            # Abaixo fazemos a validação do login e senha com o banco de dados
            $query = "SELECT * FROM usuarios WHERE nome = :nome, senha = :senha";
            $stmt = $connection->prepare($query);

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':senha', $senha);

            $stmt->execute();

            if ($stmt->rowCount()) {
                $nome = $stmt->fetch(\PDO::FETCH_ASSOC);
                if (password_verify($senha, $nome['senha'])) {
                    echo "Login bem-sucedido!";
                    header("Location: ./../views/menu.php");
                } else {
                    echo "Senha incorreta.";
                }
            } else {
                echo "Email não encontrado.";
            }

?>            