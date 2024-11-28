<?php 

namespace MeuProjeto\Models;

use MeuProjeto\configuration\ConnectionFactory;


class ProdDB {

    public static function all() {
        $conn = ConnectionFactory::getConnection();
        $sql = "SELECT * FROM produtos";
        $result = $conn->query($sql);
        $conn = null;
        return $result;
    }

    public static function find($id) {
        $conn = ConnectionFactory::getConnection();
        $sql = "SELECT * FROM produtos WHERE id = $id";
        $result = $conn->query($sql);
        $conn = null;
        return $result;
    }

    public static function create($nome, $preco, $descricao, $categoria_id) {
        $conn = ConnectionFactory::getConnection();
        $sql = "INSERT INTO produtos (nome, preco, descricao, categoria_id) VALUES ('$nome', $preco, '$descricao', $categoria_id)";
        $conn->query($sql);
        $conn = null;
    }

    public static function update($id, $nome, $preco, $descricao, $categoria_id) {
        $conn = ConnectionFactory::getConnection();
        $sql = "UPDATE produtos SET nome = '$nome', preco = $preco, descricao = '$descricao', categoria_id = $categoria_id WHERE id = $id";
        $conn->query($sql);
        $conn = null;
    }

    public static function delete($id) {
        $conn = ConnectionFactory::getConnection();
        $sql = "DELETE FROM produtos WHERE id = $id";
        $conn->query($sql);
        $conn = null;

}
}