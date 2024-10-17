<?php
// Definindo o namespace
namespace MeuProjeto\model;

// Definindo a classe Login
class Login {

    public $login;
    private $pdo;

    public function __construct($login = null) {
        $this->login = $login;
        try {
            $this->pdo = new \PDO('mysql:host=localhost;dbname=bdqiplanta', 'root', '');
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
        ob_start();
    }

    public function verificarLogin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = htmlspecialchars(trim($_POST["usuario"]));
            $senha = htmlspecialchars(trim($_POST["senha"]));

            if (empty($usuario) || empty($senha)) {
                echo("<b style='color: red; font-size: 20px;'>Usuário ou senha não podem estar vazios!</b>");
                return;
            }

            // Consultar o banco de dados para verificar se o usuário existe
            $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE nome = :usuario");
            $stmt->bindParam(':usuario', $usuario);
            $stmt->execute();
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            // Verificar a senha utilizando password_verify
            if ($user && password_verify($senha, $user['senha'])) {
                header("Location: ./src/menu.php");
                exit; // Interrompe a execução após redirecionar
            } else {
                echo("<b style='color: red; font-size: 20px;'>Acesso Negado!</b>");
            }
        }
    }

    public function __destruct() {
        ob_end_flush(); // Envia o buffer de saída e desliga
    }

}
