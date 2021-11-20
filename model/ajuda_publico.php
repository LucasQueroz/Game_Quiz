<?php
    session_start();
    $_SESSION['ajuda_publico'] = 'usado';
    header('Location: ../view/questionario.php');
	exit();
?>