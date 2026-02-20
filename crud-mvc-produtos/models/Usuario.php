<?php
require_once __DIR__ . '/../app/config/conexao.php';
class Usuario {
public function listar_U(){
global $pdo;
return $pdo->query("SELECT * FROM usuarios")
->fetchAll(PDO::FETCH_ASSOC);
}
public function criar_U($nome,$email){
global $pdo;
$stmt = $pdo->prepare("INSERT INTO usuarios (nome,email) VALUES (?,?)");
return $stmt->execute([$nome,$email]);
}
public function buscar_U($id){
global $pdo;
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id=?");
$stmt->execute([$id]);
return $stmt->fetch(PDO::FETCH_ASSOC);
}
public function atualizar_U($id,$nome,$email){
global $pdo;
$stmt = $pdo->prepare("UPDATE usuarios SET nome=?,email=? WHERE id=?");
return $stmt->execute([$nome,$email,$id]);
}
public function excluir_U($id){
global $pdo;
$stmt = $pdo->prepare("DELETE FROM usuarios WHERE id=?");
return $stmt->execute([$id]);
}
}   