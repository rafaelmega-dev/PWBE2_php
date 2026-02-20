<?php foreach ($produtos as $produto): ?>

<tr>
    <td><?= $produto['nome'] ?></td>
    <td><?= $produto['tipo'] ?></td>
    <td><?= $produto['descricao'] ?></td>
    <td><?= $produto['preco'] ?></td>
    <td><?= $produto['quantidade'] ?></td>
    <td>
        <a href="index.php?acao=editar&id=<?= $produto['id'] ?>">
            <button>Editar</button>
        </a>

        <a href="index.php?acao=excluir&id=<?= $produto['id'] ?>" 
           onclick="return confirm('Tem certeza?')">
            <button>Excluir</button>
        </a>
    </td>
</tr>

<?php endforeach; ?>