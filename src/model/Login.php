<?php

namespace MeuProjeto\model;

use MeuProjeto\persistence\ConnectionFactory;


class Login {
    private $nome;
    private $senha;

    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function validate() {
        // Obtém a conexão com o banco de dados
        $connection = ConnectionFactory::getConnection();

        // Prepara a query de seleção
        $query = "SELECT * FROM usuarios WHERE nome = :nome";
        $stmt = $connection->prepare($query);

        // Vincula os parâmetros
        $stmt->bindParam(':nome', $this->nome);

        // Executa a query
        $stmt->execute();

        // Verifica se o usuário existe
        if ($stmt->rowCount() > 0) {
            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

            // Verifica se a senha está correta
            if (password_verify($this->senha, $usuario['senha'])) {
                header('Location: ./views/menu.php');
                exit(); // Certifique-se de sair após o redirecionamento
            } else {
                echo "Senha incorreta.";
                return false; // Senha incorreta
            }
            } else {
                echo "Senha incorreta.";
                return false; // Senha incorreta
        } else {
            echo "Usuário não encontrado.";
            return false; // Usuário não encontrado
        }
    }
}
?>