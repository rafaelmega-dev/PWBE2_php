<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Dashboard</title>
<link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="header-nav">
        <div class="nav-brand">🚀 CRUD Dashboard</div>
        <div class="nav-links">
            <span>Bem-vindo, <?= $_SESSION['adm'] ?>!</span>
            <a href="?controller=usuario&acao=listar" class="btn btn-secondary">👥 Usuários</a>
            <a href="?controller=produto&acao=listar" class="btn btn-secondary">📦 Produtos</a>
            <a href="?acao=logout" class="btn btn-danger">🚪 Sair</a>
        </div>
    </nav>
    <main class="container">

