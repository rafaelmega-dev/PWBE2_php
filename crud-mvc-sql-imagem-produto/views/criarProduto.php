<div class="card">
    <h2>Novo Produto</h2>
    <form method="POST" enctype="multipart/form-data" class="form-card">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="input-modern" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="input-modern">
        </div>
        <div class="form-group">
            <label for="fornecedor">Fornecedor:</label>
            <input type="text" id="fornecedor" name="fornecedor" class="input-modern">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" class="input-modern" min="0">
        </div>
        <div class="form-group">
            <label for="fabricante">Fabricante:</label>
            <input type="text" id="fabricante" name="fabricante" class="input-modern">
        </div>
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" class="input-modern" min="0">
        </div>
        <div class="form-group">
            <label for="margem">Margem:</label>
            <input type="number" id="margem" name="margem" class="input-modern" min="0" max="100">
        </div>
        <div class="form-group">
            <label for="datacadastro">Data de Cadastro:</label>
            <input type="text" id="datacadastro" name="datacadastro" class="input-modern">
        </div>
        <div class="form-group">
            <label for="statuspro">Status:</label>
            <input type="text" id="statuspro" name="statuspro" class="input-modern">
        </div>
        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="file" id="imagem" name="imagem" class="input-modern" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
