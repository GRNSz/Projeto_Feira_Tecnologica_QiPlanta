<?php 

namespace src\model;

class Usuario {
    private $nome;
    private $endereco;
    private $email;
    private $numcell;
    private $senha;
    private $senha2;

    public function __construct($nome, $endereco, $email, $numcell, $senha, $senha2) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->numcell = $numcell;
        $this->senha = $senha;
        $this->senha2 = $senha2;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNumcell() {
        return $this->numcell;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getSenha2() {
        return $this->senha2;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNumcell($numcell) {
        $this->numcell = $numcell;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setSenha2($senha2) {
        $this->senha2 = $senha2;
    }
}

?>