<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper">
        <div class="container">
            <header class="page-header">
                <div class="header-content">
                    <h1 class="page-title">Lista de Usuários</h1>
                    <p class="page-subtitle">Gerencie os usuários do sistema</p>
                </div>
                <a href="index.php?acao=criar" class="btn-add">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Novo Usuário
                </a>
            </header>

            <div class="table-wrapper">
                <table class="users-table">
                    <thead>
                        <tr>
                            <th class="th-id">ID</th>
                            <th class="th-name">Nome</th>
                            <th class="th-email">Email</th>
                            <th class="th-actions">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $u) : ?>
                            <tr class="user-row">
                                <td class="td-id"><?= $u['id'] ?></td>
                                <td class="td-name">
                                    <div class="user-avatar">
                                        <?= strtoupper(substr($u['nome'], 0, 1)) ?>
                                    </div>
                                    <?= $u['nome'] ?>
                                </td>
                                <td class="td-email"><?= $u['email'] ?></td>
                                <td class="td-actions">
                                    <div class="action-buttons">
                                        <a href="index.php?acao=editar&id=<?= $u['id'] ?>" class="btn btn-edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            Editar
                                        </a>
                                        <a href="index.php?acao=excluir&id=<?= $u['id'] ?>" class="btn btn-delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            Excluir
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="table-footer">
                <p class="user-count">Total de usuários: <strong><?= count($usuarios) ?></strong></p>
            </div>
        </div>
    </div>
</body>
</html>
