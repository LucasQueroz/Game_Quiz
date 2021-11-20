<?php

session_start();
include('../controller/db_connect.php');

if(empty($_POST['email']) || empty($_POST['password'])) {
    $_SESSION['altenticado'] = 'false';
    header('Location: ../view/login.php');
	exit();
}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$query = "SELECT id, email, senha, nome FROM user WHERE email='{$email}' AND senha='{$password}'";

$result = mysqli_query($connect, $query);
$row_cliente = mysqli_fetch_assoc($result);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    
    if($_SESSION['email'] == 'admin@admin'){
        $_SESSION['nome_usuario'] = "Admin";
        header('Location: ../view/home.php');
        exit();
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['nome_usuario'] = $row_cliente['nome'];
        header('Location: ../view/logado_jogar.php');
        exit();
    }
    
} else {
    $_SESSION['altenticado'] = 'false';
    header('Location: ../view/login.php');
    exit();
}

mysqli_close($connect);