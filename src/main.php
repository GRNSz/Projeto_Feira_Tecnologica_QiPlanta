<?php

namespace MeuProjeto\main;

// Inclui o autoload do Composer
require __DIR__ . "/../vendor/autoload.php";

include "./src/model/Login.php";
include "./src/model/Usuario.php";
include "./src/configuration/ConnectionFactory.php";

use MeuProjeto\model\Login;
use MeuProjeto\configuration\ConnectionFactory;

// Cria uma instância da classe Login