<?php

use FTP\Connection;
use MeuProjeto\persistence\ConnectionFactory;

    class ValidaCadastro{

        private $nome;
        private $endereco;
        private $email;
        private $numcell;
        private $senha;
        private $senha2;

        public function __construct($nome, $endereco, $email, $numcell, $senha, $senha2)
        {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->numcell = $numcell;
            $this->senha = $senha;
            $this->senha2 = $senha2;
        }

        public function ValidaCadastro(): bool{


            if ($_SERVER["REQUEST_METHOD"] == "POST"){

                $nome = htmlspecialchars(trim($_POST['nome']));
                $endereco = $_POST['endereco'];
                $email = htmlspecialchars(trim($_POST['email']));
                $numcell = $_POST['numcell'];
                $senha = htmlspecialchars(trim($_POST['senha']));
                $senha2 = htmlspecialchars(trim($_POST['senha2']));
            }

            var_dump("Chegou Aqui?");
            $conn = ConnectionFactory::getConnection();

            if (!$conn) {
                die("Conexão falhou: " . $conn->errorInfo()[2]);
            }

            $sqlInsert = $conn->prepare("INSERT INTO usuarios (nome, endereco, email, numcell, senha) VALUES (?, ?, ?, ?, ?)");

            if (!$sqlInsert) {
                die("Falha na preparação da query: " . $conn->errorInfo()[2]);
            }

            $sqlInsert->bindParam(1, $nome);
            $sqlInsert->bindParam(2, $endereco);
            $sqlInsert->bindParam(3, $email);
            $sqlInsert->bindParam(4, $numcell);
            $sqlInsert->bindParam(5, $senha);
            $sqlInsert->bindParam(6, $senha2);

            if ($sqlInsert->execute()) {
                echo "Cadastro realizado com sucesso!";
                header("Location: ./../view/menu.php");
                exit;
            } else {
                echo "Erro na execução da query: " . $sqlInsert->errorInfo()[2];  
            }

            $conn = null;

            if($this->senha == $this->senha2){
                $this->mostrarMensagem('Cadastro realizado com sucesso!');
                $this->redireciona('./../view/menu.php');
                return true;
            } else {
                $this->mostrarMensagem('As senhas não conferem!');
                return false;
            }
        }

        public function mostrarMensagem($mensagem){
            echo "<script>alert('$mensagem');</script>";
        }

        public function redireciona($url){
            header("Location: $url");
            exit();
        }
    }
?>