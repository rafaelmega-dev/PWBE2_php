<?php
include "conexao.php";

$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];

$sql = "update usuarios
    set nome='$nome',email='$email'
    where id=$id";

mysqli_query($conn,$sql);
header("Location: index.php");