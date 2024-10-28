<?php

namespace MeuProjeto\main;

// Inclui o autoload do Composer
require __DIR__ . "/../vendor/autoload.php";

include "./src/model/Login.php";
include "./src/model/Usuario.php";
include "./src/persistence/ConnectionFactory.php";

use MeuProjeto\model\Login;
use MeuProjeto\configuration\ConnectionFactory;

// Cria uma instância da classe Login
$login = new Login($arg1, $arg2); // Replace $arg1 and $arg2 with the actual arguments required by the Login constructor

$connection= new ConnectionFactory();   
$connection = ConnectionFactory::getConnection();