<h2>Novo Produto</h2>
<form method="post" action="index.php?acao=salvar">
Nome: <input type="text" name="nome" required><br><br>
Tipo: <input type= "text" name="tipo" required><br><br>
Descrição:<br>
<textarea name="descricao" rows="4" cols="40" required></textarea><br><br>
Preço: <input type="number" name="preco" step="0.01" required><br><br>
Quantidade: <input type="number" name="quantidade" required><br><br>
<button>Salvar</button>
</form>