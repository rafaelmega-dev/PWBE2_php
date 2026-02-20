<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Usuários</h2>
<a href="index.php?acao_U=criar_U">Novo Usuário</a>
<br><br>
<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Ações</th>
</tr>
<?php foreach($usuarios as $u): ?>
<tr>
<td><?= $u['id'] ?></td>
<td><?= $u['nome'] ?></td>
<td><?= $u['email'] ?></td>
<td>
<a href="index.php?acao_U=editar_U&id=<?= $u['id'] ?>">Editar</a> |
<a href="index.php?acao_U=excluir_U&id=<?= $u['id'] ?>">Excluir</a>
</td>
</tr>
<?php endforeach; ?>
</table>


</body>
</html>



