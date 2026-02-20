<?php
require_once __DIR__ . '/../app/config/conexao.php';

class Produto {

    public function listarProdutos(){
        global $pdo;
        return $pdo->query("SELECT * FROM produtos")
                   ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criarProdutos($nomeProdutos,$tipoProdutos,$precoProdutos,$quantidadeProdutos,$descricaoProdutos){
        global $pdo;
        $stmtProdutos = $pdo->prepare("INSERT INTO produtos (nome,tipo,descricao,preco,quantidade) VALUES (?,?,?,?,?)");
        return $stmtProdutos->execute([$nomeProdutos,$tipoProdutos,$precoProdutos,$quantidadeProdutos,$descricaoProdutos]);
    }

    public function buscarProdutos($idProdutos){
        global $pdo;
        $stmtProdutos = $pdo->prepare("SELECT * FROM produtos WHERE id_produto=?");
        $stmtProdutos->execute([$idProdutos]);
        return $stmtProdutos->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarProdutos($idProdutos,$nomeProdutos,$tipoProdutos,$precoProdutos,$quantidadeProdutos,$descricaoProdutos){
        global $pdo;
        $stmtProdutos = $pdo->prepare("UPDATE produtos SET nome=?,tipo=?,descricao=?,preco=?,quantidade=? WHERE id_produto=?");
        return $stmtProdutos->execute([$nomeProdutos,$tipoProdutos,$descricaoProdutos,$precoProdutos,$quantidadeProdutos,$idProdutos]);
    }

    public function excluirProdutos($idProdutos){
        global $pdo;
        $stmtProdutos = $pdo->prepare("DELETE FROM produtos WHERE id_produto=?");
        return $stmtProdutos->execute([$idProdutos]);
    }
}