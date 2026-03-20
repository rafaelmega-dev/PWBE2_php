<div class="card">
    <h2>Editar Usuário</h2>
    <form method="POST" enctype="multipart/form-data" class="form-card">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>" class="input-modern" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $usuario['email']; ?>" class="input-modern" required>
        </div>
        <?php if ($usuario['imagem']) { ?>
            <div class="form-group">
                <img src="<?php echo $usuario['imagem']; ?>" class="edit-preview" alt="Imagem atual">
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="imagem">Nova Imagem (opcional):</label>
            <input type="file" id="imagem" name="imagem" class="input-modern" accept="image/*">
        </div>
        <input type="hidden" name="imagem_atual" value="<?php echo $usuario['imagem']; ?>">
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>
