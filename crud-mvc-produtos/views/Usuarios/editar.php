<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<h2>Editar Usuário</h2>
<form method="post" action="index.php?acao_U=atualizar_U">
<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
Nome: <input name="nome" value="<?= $usuario['nome'] ?>"><br><br>
Email: <input name="email" value="<?= $usuario['email'] ?>"><br><br>
<button>Atualizar</button>
</form>
    
</body>
</html>
