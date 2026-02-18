<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "delete from usuarios where id=$id";
mysqli_query($conn, $sql);

header("Location: index.php");