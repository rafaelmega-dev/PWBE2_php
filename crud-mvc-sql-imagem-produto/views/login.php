<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CRUD Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="login-container">
    <div class="login-card card">
        <h2>Login do Sistema</h2>
        <?php if (isset($erro)) { ?>
            <div class="error"><?php echo $erro; ?></div>
        <?php } ?>
        <form method="POST" action="index.php?acao=login" class="form-card">
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" class="input-modern" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" class="input-modern" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</div>
</body>
</html>
