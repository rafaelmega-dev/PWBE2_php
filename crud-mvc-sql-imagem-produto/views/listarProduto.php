<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2>Lista de Produtos</h2>
        <a href="?controller=produto&amp;acao=criar" class="btn btn-primary">Novo Produto</a>
    </div>
<div class="table-container">
        <table class="modern-table">
            <thead>
            <tr>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Fornecedor</th>
    <th>Quantidade</th>
    <th>Fabricante</th>
    <th>Preço</th>
    <th>Margem</th>
    <th>Data de Cadastro</th>
    <th>Status</th>
    <th>Imagem</th>
    <th>Ações</th>
</tr>
<?php foreach ($produtos as $p) { ?>
<tr>
    <td><?php echo $p['idPro']; ?></td>
    <td><?php echo $p['nome']; ?></td>
    <td><?php echo $p['descricao']; ?></td>
    <td><?php echo $p['fornecedor']; ?></td>
    <td><?php echo $p['quantidade']; ?></td>
    <td><?php echo $p['fabricante']; ?></td>
    <td><?php echo $p['preco']; ?></td>
    <td><?php echo $p['margem']; ?></td>
    <td><?php echo $p['data_cadastro']; ?></td>
    <td><?php echo $p['status_pro']; ?></td>
    <td>
        <?php if ($p['imagemPro']) { ?>
        <img src="<?php echo $p['imagemPro']; ?>" class="thumb-img" alt="Produto">
        <?php } else { ?> 
            <span>Sem imagem</span>
        <?php } ?>
    </td>
    <td>
        <a href="?controller=produto&amp;acao=editar&amp;id=<?php echo $p['idPro']; ?>" class="btn btn-secondary">Editar</a>
        <a href="?controller=produto&amp;acao=excluir&amp;id=<?php echo $p['idPro']; ?>" class="btn btn-danger" onclick="return confirm('Confirma exclusão?')">Excluir</a>
    </td>
</tr>
<?php } ?>
            </tbody>
        </table>
    </div>
</div>
