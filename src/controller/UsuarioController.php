<?php

namespace MeuProjeto\Controller;

use MeuProjeto\persistence\ConnectionFactory;
use Src\Model\Usuario;


class UsuarioController {

    public function index()
    {
        header("Location: ./../views/cadastro&login.php");
    }

    public function store()
    {
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $numcell = $_POST['numcell'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        if ($senha != $senha2) {
            echo "As senhas não conferem";
            return;
        }

        // Cria uma instância da classe Usuario
        $usuario = new Usuario($nome, $endereco, $email, $numcell, $senha, $senha2);

        // Obtém a conexão com o banco de dados
        $connection = ConnectionFactory::getConnection();

        // Prepara a query de inserção
        $query = "INSERT INTO usuarios (nome, endereco, email, numcell, senha) VALUES (:nome, :endereco, :email, :numcell, :senha)";
        $stmt = $connection->prepare($query);

        // Vincula os parâmetros
        $nome = $usuario->getNome();
        $endereco = $usuario->getEndereco();
        $email = $usuario->getEmail();
        $numcell = $usuario->getNumcell();
        $senha = password_hash($usuario->getSenha(), PASSWORD_DEFAULT); // Hash da senha

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':numcell', $numcell);
        $stmt->bindParam(':senha', $senha);

        // Executa a query
        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    }
}
