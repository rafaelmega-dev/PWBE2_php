<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Produtos</h2>
<a href="index.php?acao_P=criar_P">Novo Produto</a>
<br><br>
<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Tipo</th>
<th>Descrição</th>
<th>Preço</th>
<th>Quantidade</th>
<th>Ações</th>
</tr>
<?php foreach($produto as $p): ?>
<tr>
<td><?= $p['id_produto'] ?></td>
<td><?= $p['nome'] ?></td>
<td><?= $p['tipo'] ?></td>
<td><?= $p['descricao'] ?></td>
<td><?= $p['preco'] ?></td>
<td><?= $p['quantidade'] ?></td>
<td>
<a href="index.php?acao_P=editar_P&id_produto=<?= $p['id_produto'] ?>">Editar</a> |
<a href="index.php?acao_P=excluir_P&id_produto=<?= $p['id_produto'] ?>">Excluir</a>
</td>
</tr>
<?php endforeach; ?>
</table>
    
</body>
</html>


