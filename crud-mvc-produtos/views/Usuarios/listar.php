<h2>Usuários</h2>
<a href="index.php?acao=criar">Novo Usuário</a>
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
<a href="index.php?acao=editar&id=<?= $u['id'] ?>">Editar</a> |
<a href="index.php?acao=excluir&id=<?= $u['id'] ?>">Excluir</a>
</td>
</tr>
<?php endforeach; ?>
</table>