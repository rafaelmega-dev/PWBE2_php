<div class="card">
    <h2>Editar Produto</h2>
    <form method="POST" enctype="multipart/form-data" class="form-card">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $produto['nome']; ?>" class="input-modern" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="<?php echo $produto['descricao']; ?>" class="input-modern">
        </div>
        <div class="form-group">
            <label for="fornecedor">Fornecedor:</label>
            <input type="text" id="fornecedor" name="fornecedor" value="<?php echo $produto['fornecedor']; ?>" class="input-modern">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" value="<?php echo $produto['quantidade']; ?>" class="input-modern" min="0">
        </div>
        <div class="form-group">
            <label for="fabricante">Fabricante:</label>
            <input type="text" id="fabricante" name="fabricante" value="<?php echo $produto['fabricante']; ?>" class="input-modern">
        </div>
        <div class="form-group">
            <label for="preco">Preço (R$):</label>
            <input type="number" id="preco" name="preco" step="0.01" value="<?php echo $produto['preco']; ?>" class="input-modern" min="0">
        </div>
        <div class="form-group">
            <label for="margem">Margem (%):</label>
            <input type="number" id="margem" name="margem" value="<?php echo $produto['margem']; ?>" class="input-modern" min="0" max="100">
        </div>
        <div class="form-group">
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="text" id="data_cadastro" name="data_cadastro" value="<?php echo $produto['data_cadastro']; ?>" class="input-modern">
        </div>
        <div class="form-group">
            <label for="statuspro">Status:</label>
            <input type="text" id="statuspro" name="statuspro" value="<?php echo $produto['status_pro']; ?>" class="input-modern">
        </div>
        <?php if ($produto['imagemPro']) { ?>
            <div class="form-group">
                <img src="<?php echo $produto['imagemPro']; ?>" class="edit-preview" alt="Imagem atual">
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="imagem">Nova Imagem:</label>
            <input type="file" id="imagem" name="imagem" class="input-modern" accept="image/*">
        </div>
        <input type="hidden" name="imagem_atual" value="<?php echo $produto['imagemPro']; ?>">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
