<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2>Lista de Usuários</h2>
        <a href="?acao=criar" class="btn btn-primary">Novo Usuário</a>
    </div>
    <div class="table-container">
        <table class="modern-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $u) { ?>
            <tr>
                <td><?php echo $u['id']; ?></td>
                <td><?php echo $u['nome']; ?></td>
                <td><?php echo $u['email']; ?></td>
                <td>
                    <?php if ($u['imagem']) { ?>
                        <img src="<?php echo $u['imagem']; ?>" class="thumb-img" alt="Foto">
                    <?php } else { ?>
                        <span>Sem imagem</span>
                    <?php } ?>
                </td>
                <td>
                    <a href="?acao=editar&id=<?php echo $u['id']; ?>" class="btn btn-secondary">Editar</a>
                    <a href="?acao=excluir&id=<?php echo $u['id']; ?>" class="btn btn-danger" onclick="return confirm('Confirma exclusão?')">Excluir</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
