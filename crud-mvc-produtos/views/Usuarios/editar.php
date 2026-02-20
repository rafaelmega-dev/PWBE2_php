<h2>Editar Usuário</h2>
<form method="post" action="index.php?acao=atualizar">
<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
Nome: <input name="nome" value="<?= $usuario['nome'] ?>"><br><br>
Email: <input name="email" value="<?= $usuario['email'] ?>"><br><br>
<button>Atualizar</button>
</form>