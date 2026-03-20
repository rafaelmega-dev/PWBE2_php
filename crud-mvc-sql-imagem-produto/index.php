<?php
session_start();


if (!isset($_SESSION['adm'])) {
    include "views/login.php";
} else {
    include "views/layout/header.php";

    include "app/config/conexao.php";
    include "models/Usuario.php";
    include "models/Produto.php";

    $controller = $_GET['controller'] ?? 'usuario';
    $acao = $_GET['acao'] ?? 'listar';

    if ($controller == 'usuario') {
        include "controllers/UsuarioController.php";
    } elseif ($controller == 'produto') {
        include "controllers/ProdutoController.php";
    }

    include "views/layout/footer.php";
}
?>
