<?php
require_once "models/Produto.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : 'listar';

// PROTEÇÃO GLOBAL
if (!isset($_SESSION['adm'])) {
    include "views/login.php";
    exit;
}

if ($acao == 'listar') {

    $produtos = listarProdutos();
    include "views/listarProduto.php";
}

if ($acao == 'criar') {

    if ($_POST) {

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $fornecedor = $_POST['fornecedor'];
        $quantidade = $_POST['quantidade'];
        $fabricante = $_POST['fabricante'];
        $preco = $_POST['preco'];
        $margem = $_POST['margem'];
        $datacadastro = $_POST['datacadastro'];
        $statuspro = $_POST['statuspro'];
        $imagem = "";

        if ($_FILES['imagem']['name']) {

            $imagem = "img/" . $_FILES['imagem']['name'];
            move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
        }

        inserirProduto(
            $nome,
            $descricao,
            $fornecedor,
            $quantidade,
            $fabricante,
            $preco,
            $margem,
            $datacadastro,
            $statuspro,
            $imagem
        );

        header("Location: index.php?controller=produto&acao=listar");
        exit;
        
    }

    include "views/criarProduto.php";
}

if ($acao == 'editar') {

    $id = $_GET['id'];

    if ($_POST) {

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $fornecedor = $_POST['fornecedor'];
        $quantidade = $_POST['quantidade'];
        $fabricante = $_POST['fabricante'];
        $preco = $_POST['preco'];
        $margem = $_POST['margem'];
        $datacadastro = $_POST['datacadastro'];
        $statuspro = $_POST['statuspro'];
        $imagem = $_POST['imagem_atual'];

        if ($_FILES['imagem']['name']) {

            $imagem = "img/" . $_FILES['imagem']['name'];
            move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
        }

        atualizarProduto(
            $id,
            $nome,
            $descricao,
            $fornecedor,
            $quantidade,
            $fabricante,
            $preco,
            $margem,
            $datacadastro,
            $statuspro,
            $imagem
        );

        header("Location: index.php?controller=produto&acao=listar");
        exit;
    }

    $produto = buscarProduto($id);
    include "views/editarProduto.php";
}

if ($acao == 'excluir') {

    excluirProduto($_GET['id']);

    header("Location: index.php?controller=produto&acao=listar");
    exit;
}