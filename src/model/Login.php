<?php

// Definindo o namespace
namespace MeuProjeto\model;

// Definindo a classe Login
class Login {

    private $login;

    public function __construct($login = null) {
        $this->login = $login;
    }

    private $usuarios = [
        [
            'usuario' => 'admin@',
            'senha' => '1234'
        ]
    ];

    public function verificarLogin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = htmlspecialchars(trim($_POST["usuario"]));
            $senha = htmlspecialchars(trim($_POST["senha"]));

            foreach ($this->usuarios as $user) {
                if ($user['usuario'] === $usuario && $user['senha'] === $senha) {
                    header("Location: ./src/menu.php");
                    return; // Interrompe o loop após encontrar o usuário
                }
            }
            echo("<b style='Color: red; font-size: 20px;'>Acesso Negado!</b>");
        }
    }
}
