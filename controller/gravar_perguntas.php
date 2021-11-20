<?php

session_start();
include('../controller/db_connect.php');

$pergunta = mysqli_real_escape_string($connect, $_POST['pergunta']);
$alternativa_a = mysqli_real_escape_string($connect, $_POST['alternativa_a']);
$alternativa_b = mysqli_real_escape_string($connect, $_POST['alternativa_b']);
$alternativa_c = mysqli_real_escape_string($connect, $_POST['alternativa_c']);
$alternativa_d = mysqli_real_escape_string($connect, $_POST['alternativa_d']);
$resposta = mysqli_real_escape_string($connect, $_POST['resposta']);

if($resposta == 'A'){
    $resposta = $alternativa_a;
} else if($resposta == 'B'){
    $resposta = $alternativa_b;
} else if($resposta == 'C'){
    $resposta = $alternativa_c;
} else if($resposta == 'D'){
    $resposta = $alternativa_d;
}

$query = "INSERT INTO perguntas (pergunta, alternativa_a, alternativa_b, alternativa_c, alternativa_d, resposta) VALUES ('$pergunta', '$alternativa_a', '$alternativa_b', '$alternativa_c', '$alternativa_d', '$resposta')";

$result = mysqli_query($connect, $query);
$_SESSION['cadastrado_pergunta'] = "true";
header('Location: ../view/home.php');

/*
if(!mysqli_query($connect, $sql)){
    
    $_SESSION['cadastrado_pergunta'] = "false";
    //header('Location: ../view/home.php');
    echo 'false';
} else{
    
    $_SESSION['cadastrado_pergunta'] = "true";
    echo 'true';
    //header('Location: ../view/home.php');
    
}
*/
mysqli_close($connect);