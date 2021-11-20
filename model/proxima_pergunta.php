<?php 
	session_start();
    unset($_SESSION['resposta']);
    unset($_SESSION['acertou_pergunta']);

    $_SESSION['indice_questao']++;

	header('Location: ../view/questionario.php');
	exit();
?>