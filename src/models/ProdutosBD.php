<?php

namespace src\models;

use MeuProjeto\configuration\ConnectionFactory;

class ProdutosBD {
    private $connection;

    public function __construct() {
        $factory = new ConnectionFactory();
        $this->connection = $factory->getConnection();
    }

    public function inserirProduto($nome, $descricao, $preco, $quantidade, $imagem) {
        $sql = "INSERT INTO produtos (nome, descricao, preco, quantidade, imagem) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$nome, $descricao, $preco, $quantidade, $imagem]);
        return $stmt->rowCount();
    }

    public function listarProdutos() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarProdutoPorId($id) {
        $sql = "SELECT * FROM produtos WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarProduto($id, $nome, $descricao, $preco, $quantidade, $imagem) {
    public function atualizarProduto($id, $nome, $descricao, $preco, $quantidade, $imagem) {
        $sql = "UPDATE produtos SET nome = ?, descricao = ?, preco = ?, quantidade = ?, imagem = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute([$nome, $descricao, $preco, $quantidade, $imagem, $id]);
    }
    public function excluirProduto($id) {
        $sql = "DELETE FROM produtos WHERE id = ?";
    public function excluirProduto($id) {
        $sql = "DELETE FROM produtos WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute([$id]);
    }
}