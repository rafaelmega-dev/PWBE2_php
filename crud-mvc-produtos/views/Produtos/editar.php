<link rel="stylesheet" href="styles.css">

<h2>Editar Produto</h2>

<form method="post" action="index.php?acao_P=atualizar_P">
    <input type="hidden" name="idProdutos" value="<?= $produto['id_produto'] ?>">
    <input type="text" name="nomeProdutos" value="<?= $produto['nome'] ?>" required><br>
    <textarea name="descricaoProdutos"><?= $produto['descricao'] ?></textarea><br>
    <input type="text" name="tipoProdutos" value="<?= $produto['tipo'] ?>"><br>
    <input type="number" step="0.01" name="precoProdutos" value="<?= $produto['preco'] ?>" required><br>
    <input type="number" name="quantidadeProdutos" value="<?= $produto['quantidade'] ?>" required><br>
    <button type="submit">Atualizar</button>
</form>