<div class="card">
    <h2>Novo Usuário</h2>
    <form method="POST" enctype="multipart/form-data" class="form-card">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="input-modern" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="input-modern" required>
        </div>
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" class="input-modern" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" class="input-modern" required>
        </div>
        <div class="form-group">
            <label for="papel">Papel:</label>
            <input type="text" id="papel" name="papel" class="input-modern" required>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="file" id="imagem" name="imagem" class="input-modern" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
