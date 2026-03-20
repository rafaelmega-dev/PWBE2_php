<?php
require_once "app/config/conexao.php";

function listarProdutos() {

    $con = conectar();
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query($con, $sql);

    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function inserirProduto($nomePro, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagemPro) {

    $con = conectar();
    $sql = "INSERT INTO produto (nome, descricao, fornecedor, quantidade, fabricante, preco, margem, data_cadastro, status_pro, imagem)
         VALUES ('$nomePro', '$descricao', '$fornecedor', '$quantidade', '$fabricante', '$preco', '$margem', '$data_cadastro', '$status_pro', '$imagemPro')";

    mysqli_query($con, $sql);
}

function buscarProduto($idPro) {

    $con = conectar();
    $sql = "SELECT * FROM produto WHERE idPro = $idPro";
    $resultado = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($resultado);
}

function atualizarProduto($idPro, $nomePro, $descricao, $fornecedor, $quantidade, $fabricante, $preco, $margem, $data_cadastro, $status_pro, $imagemPro) {

    $con = conectar();
    $sql = "UPDATE produto 
            SET nome='$nomePro', descricao='$descricao', fornecedor='$fornecedor', quantidade='$quantidade', fabricante='$fabricante', preco='$preco', margem='$margem', data_cadastro='$data_cadastro', status_pro='$status_pro', imagem='$imagemPro' WHERE idPro=$idPro";
    mysqli_query($con, $sql);
}

function excluirProduto($idPro) {
    $con = conectar();
    $sql = "DELETE FROM produto WHERE id=$idPro";
    mysqli_query($con, $sql);
}

