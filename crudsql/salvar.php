<?php
include "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "insert into usuarios (nome,email)
    values('$nome','$email')";

mysqli_query($conn,$sql);

header("Location: index.php");