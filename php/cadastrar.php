<?php

$nome = $_POST ['NomeCliente'];
$sobrenome = $_POST ['SobrenomeCliente'];
$sexo = $_POST ['Sexo'];

$host = 'localhost';
$usuario = 'root';
$senha = '';
$bd = 'cadastro';

$stringcon = mysqli_connect($host, $usuario, $senha, $bd) or die("connection fail");
$sql = "INSERT INTO clientes VALUES";
$sql.= "('$nome', '$sobrenome', '$sexo')"; 
mysqli_query($stringcon, $sql) or die ('Erro ao criar registro');
mysqli_close($stringcon);
echo"Cliente Registrado!";
