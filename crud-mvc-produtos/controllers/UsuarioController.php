<?php
require_once __DIR__ . '/../models/Usuario.php';
class UsuarioController {
private $model;
public function __construct(){
$this->model = new Usuario();
}
public function listar_U(){
$usuarios = $this->model->listar_U();
include 'views/Usuarios/listar.php';
}
public function criar_U(){
include 'views/Usuarios/criar.php';
}
public function salvar_U($nome,$email){
$this->model->criar_U($nome,$email);
header("Location: index.php");
}
public function editar_U($id){
$usuario = $this->model->buscar_U($id);
include 'views/Usuarios/editar.php';
}
public function atualizar_U($id,$nome,$email){
$this->model->atualizar_U($id,$nome,$email);
header("Location: index.php");
}
public function excluir_U($id){
$this->model->excluir_U($id);
header("Location: index.php");
}
}