<?php 
session_start();
require_once '../controller/db_connect.php';

if($_SESSION['ajuda_publico'] == 'usado'){
    $_SESSION['ajuda_publico'] = 'esgotado';
}
if($_SESSION['ajuda_einstein'] == 'usado'){
    $_SESSION['ajuda_einstein'] = 'esgotado';
}

$resposta_usuario = $_POST['gender'];
$indice_questao = $_SESSION['indice_questao'];
$pontuacao = $_SESSION['pontuacao'];
$num_questoes = $_SESSION['num_questoes'];

if($num_questoes <= $indice_questao){
    $sql = "SELECT * FROM perguntas WHERE id='$indice_questao'";

    if(mysqli_query($connect, $sql)){
        $row = mysqli_fetch_assoc(mysqli_query($connect, $sql));

        $_SESSION['resposta'] = $row['resposta'];

        if($row['resposta'] == $resposta_usuario){
            $_SESSION['pontuacao'] = ++$pontuacao;
            $_SESSION['acertou_pergunta'] = 'true';
        } else {
            $_SESSION['acertou_pergunta'] = 'false';
        }
        
        //$_SESSION['indice_questao'] = ++$indice_questao;
        //header('Location: ../view/questionario.php');
    } else{
        echo 'Erro, o programa terá que ser encerrado.';
    }

    header('Location: ../view/fim_jogo.php');
} else{
    $sql = "SELECT * FROM perguntas WHERE id='$indice_questao'";

    if(mysqli_query($connect, $sql)){
        $row = mysqli_fetch_assoc(mysqli_query($connect, $sql));

        $_SESSION['resposta'] = $row['resposta'];
        
        if($row['resposta'] == $resposta_usuario){
            $_SESSION['pontuacao'] = ++$pontuacao;
            $_SESSION['acertou_pergunta'] = 'true';
        } else {
            $_SESSION['acertou_pergunta'] = 'false';
        }
        
        //$_SESSION['indice_questao'] = ++$indice_questao;
        header('Location: ../view/feedback_questao.php');
    } else{
        echo 'Erro, o programa terá que ser encerrado.';
    }
}