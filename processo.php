<?php
include_once("conexao.php");

$nome_usuario = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$enderco = filter_input(INPUT_POST, 'enderco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
$nascimento = filter_input(INPUT_POST, 'nasc', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$create_user = "INSERT INTO cadastro (nome_usuario, cpf, endereco, tele, nascimento, nome, senha) VALUES ('$nome_usuario', '$cpf', '$enderco', '$telefone', '$nascimento', '$nome', '$senha')";
$created_user = mysqli_query($conn, $create_user);
