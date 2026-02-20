<?php
require_once __DIR__ . '/../models/Usuario.php';
class ProdutosController {
private $model;
public function __construct(){
$this->model = new Usuario();
}
public function listar(){
$produtos = $this->model->listar();
include 'views/Produtos/listar.php';
}
public function criar(){
include 'views/Produtos/criar.php';
}
public function salvar($nome,$tipo, $descrição, $preco, $quantidade){
$this->model->criar($nome,$email);
header("Location: index.php");
}
public function editar($id){
$usuario = $this->model->buscar($id);
include 'views/Usuarioeditar.php';
}
public function atualizar($id,$nome,$email){
$this->model->atualizar($id,$nome,$email);
header("Location: index.php");
}
public function excluir($id){
$this->model->excluir($id);
header("Location: index.php");
}
}