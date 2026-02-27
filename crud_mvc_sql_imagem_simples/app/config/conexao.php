<?php

function conectar() {

    $con = mysqli_connect("localhost","root","123456","bd_loja_mvc",3307);

    
    /*
Testar conexão 
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
*/
    return $con;
}