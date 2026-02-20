<?php
require_once __DIR__ . '/../models/Produto.php';
class ProdutosController {
private $modelProdutos;
public function __construct(){
$this->modelProdutos = new Produto();
}
public function listarProdutos(){
$produto = $this->modelProdutos->listarProdutos();
include 'views/Produtos/listar.php';
}
public function criarProdutos(){
include 'views/Produtos/criar.php';
}
public function salvarProdutos($nomeProdutos,$tipoProdutos, $descricaoProdutos, $precoProdutos, $quantidadeProdutos){
$this->modelProdutos->criarProdutos($nomeProdutos,$tipoProdutos, $descricaoProdutos, $precoProdutos, $quantidadeProdutos);
header("Location: index.php");
}
public function editarProdutos($idProdutos){
$produto = $this->modelProdutos->buscarProdutos($idProdutos);
include 'views/Produtos/editar.php';
}
public function atualizarProdutos($idProdutos,$nomeProdutos,$tipoProdutos, $descricaoProdutos, $precoProdutos, $quantidadeProdutos){
$this->modelProdutos->atualizarProdutos($idProdutos,$nomeProdutos,$tipoProdutos, $descricaoProdutos, $precoProdutos, $quantidadeProdutos);
header("Location: index.php");
}
public function excluirProdutos($idProdutos){
$this->modelProdutos->excluirProdutos($idProdutos);
header("Location: index.php");
}
}