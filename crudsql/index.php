<?php
include "conexao.php";
$sql="select * from usuarios";
$resultado = mysqli_query($conn, $sql);
?>

<h2>Lista de Usuários</h2>
<a href="criar.php">Novo Usuário</a>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
</tr>
<?php while($u=mysqli_fetch_assoc($resultado)){
?>
<tr>
    <td><?=$u['nome']?></td>
    <td><?=$u['email']?></td>
    <td>
        <a href="editar.php?id=<?=$u['id']?>">Editar</a>
        <a href="excluir.php?id=<?=$u['id']
    ?>">Excluir</>
    </td>
</tr>
<?php } ?>
</table>
