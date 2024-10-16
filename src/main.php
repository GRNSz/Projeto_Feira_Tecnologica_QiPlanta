<?php

// Inclui o autoload do Composer
require __DIR__ . "/../vendor/autoload.php";


// Usa a classe Login do namespace MeuProjeto\Login
use MeuProjeto\model\Login;
use MeuProjeto\model\UsuarioSistema;
use MeuProjeto\model\Cadastrar;
use MeuProjeto\persistence\ConnectionFactory;
use MeuProjeto\model\CadastrarProduto;

// Cria uma instância da classe Login
$login = new Login();

//$usr = new UsuarioSistema();
//$usr->nome = "";

//$sqlInsert = "INSERT INTO usuarios (nome) VALUES ('".$usr->nome."')";

//echo $sqlInsert;

// Cria uma instância da classe ConnectionFactory para conexão com o banco de dados.
//$conn = ConnectionFactory::getConnection();
//$conn->exec($sqlInsert);

include 'ConnectionFactory.php';
include 'Login.php';
include 'Cadastrar.php';
include 'CadadtrarProduto.php';


// Debugging


//Faz um teste para verificar se a conexão com o banco de dados foi realizada com sucesso.
//echo print_r(value:$conn, return: true);

$cadastro = new Cadastrar();
$cadastroProduto = new CadastrarProduto();

// Teste para verificar se a conexão com o banco de dados foi realizada com sucesso.

// Verifica o login (se o formulário foi enviado)
$login->verificarLogin();
$cadastro->getCadastrar();
$cadastroProduto->getCadastrarProduto();
