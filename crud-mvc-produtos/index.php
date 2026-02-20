<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CRUD MVC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
require_once 'controllers/UsuarioController.php';
$usuarioController = new UsuarioController();
$acaoUsuario = isset($_GET['acao_U']) ? $_GET['acao_U'] : 'listar_U';
if($acaoUsuario == 'listar_U'){
$usuarioController->listar_U();
}
if($acaoUsuario == 'criar_U'){
$usuarioController->criar_U();
}
if($acaoUsuario == 'salvar_U'){
$usuarioController->salvar_U($_POST['nome'], $_POST['email']);
}
if($acaoUsuario == 'editar_U'){
$usuarioController->editar_U($_GET['id']);
}
if($acaoUsuario == 'atualizar_U'){
$usuarioController->atualizar_U($_POST['id'], $_POST['nome'], $_POST['email']);
}
if($acaoUsuario == 'excluir_U'){
$usuarioController->excluir_U($_GET['id']);
}


require_once 'controllers/ProdutoController.php';
$produtoController = new ProdutosController();
$acaoProduto = isset($_GET['acao_P']) ? $_GET['acao_P'] : 'listar_P';
if($acaoProduto == 'listar_P'){
$produtoController->listarProdutos();
}
if($acaoProduto == 'criar_P'){
$produtoController->criarProdutos();
}
if($acaoProduto == 'salvar_P'){
$produtoController->salvarProdutos($_POST['nome'], $_POST['tipo'], $_POST['descricao'], $_POST['preco'], $_POST['quantidade']);
}
if($acaoProduto == 'editar_P'){
$produtoController->editarProdutos($_GET['id_produto']);
}
if($acaoProduto == 'atualizar_P'){
$produtoController->atualizarProdutos($_POST['id_produto'], $_POST['nome'], $_POST['tipo'], $_POST['descricao'], $_POST['preco'], $_POST['quantidade']);
}
if($acaoProduto == 'excluir_P'){
$produtoController->excluirProdutos($_GET['id_produto']);
}
?>
</body>
</html>