<h2>Usuários</h2>

<a href="index.php?acao=criar">Novo Usuário</a>

<ul>
    <?php foreach ($usuarios as $u) : ?>
        <li>
            <?= $u['nome'] ?> - <?= $u['email'] ?>
            <a href="index.php?acao=editar&id=<?= $u['id'] ?>">Editar</a>  |
            <a href="index.php?acao=excluir&id=<?= $u['id'] ?>">Excluir</a>
        </li>
    <?php endforeach; ?>
</ul>