<div class="form-wrapper">
    <div class="form-card">
        <h2 class="form-title">Novo Usuário</h2>

        <form action="index.php?acao=salvar" method="POST">
            
            <div class="form-group">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-input" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">Salvar</button>
                <a href="index.php?acao=listar" class="btn-secondary">Voltar</a>
            </div>

        </form>
    </div>
</div>
