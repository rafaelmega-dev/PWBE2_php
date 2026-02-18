<?php
//host é o local da aplicação: localhost ou 127.0.0.01
//db name é o nome da minha base de dados(o banco de dados: crud_mvc)
$pdo = new PDO("mysql:host=localhost;port=3307;dbname=crud_mvc", "root", "123456");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
