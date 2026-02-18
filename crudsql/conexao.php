<?php
$conn = mysqli_connect("localhost", "root", "123456", "crud_mvc", 3307);

if (!$conn) {
    die("Erro de conexão: ".mysqli_connect_error());
}
?>  