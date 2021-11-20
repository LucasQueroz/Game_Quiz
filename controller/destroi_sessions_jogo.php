<?php 
	session_start();
    unset($_SESSION['indice_questao']);
    unset($_SESSION['pontuacao']);
    unset($_SESSION['num_questoes']);
    unset($_SESSION['acertou_pergunta']);
    unset($_SESSION['ajuda_publico']);
    unset($_SESSION['ajuda_einstein']);
    
	header('Location: ../view/logado_jogar.php');
	exit();
?>