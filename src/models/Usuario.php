<?php

namespace MeuProjeto\models;

class Usuario {
    private $nome;
    private $endereco;
    private $email;
    private $numcell;
    private $senha;

    public function __construct($nome, $endereco, $email, $numcell, $senha) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->numcell = $numcell;
        $this->senha = password_hash($senha, PASSWORD_BCRYPT); // Hash da senha para segurança
    }

    // Getters
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

    // Setters
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
        $this->senha = password_hash($senha, PASSWORD_BCRYPT);
    }
}
?>