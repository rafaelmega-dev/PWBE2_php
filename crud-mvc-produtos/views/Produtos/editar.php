<h2>Editar Produto</h2>

<form method="POST">
    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
    <input type="text" name="nome" value="<?= $produto['nome'] ?>" required><br>
    <textarea name="descricao"><?= $produto['descricao'] ?></textarea><br>
    <input type="text" name="tipo" value="<?= $produto['tipo'] ?>"><br>
    <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required><br>
    <button type="submit">Atualizar</button>
</form>