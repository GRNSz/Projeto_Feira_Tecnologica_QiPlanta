<?php

namespace MeuProjeto\Controller;

class UsuarioController {

    public function index()
    {
        //require __DIR__ . "./../views/cadastro&login.php";
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
    }
}

