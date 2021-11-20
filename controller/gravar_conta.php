<?php

session_start();
include('../controller/db_connect.php');

$nome = mysqli_real_escape_string($connect, $_POST['nome']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "INSERT INTO user (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if(mysqli_query($connect, $query)){
    $_SESSION['nome_usuario'] = $nome;
    $_SESSION['email'] = $email;
    unset($_SESSION['cadastrado']);
    header('Location: ../view/logado_jogar.php');
} else{
    $_SESSION['cadastrado'] = "false";
    header('Location: ../view/criar_conta.php');
}

mysqli_close($connect);