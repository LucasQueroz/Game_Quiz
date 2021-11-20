<?php
    session_start();
    $_SESSION['ajuda_einstein'] = 'usado';
    header('Location: ../view/questionario.php');
	exit();
?>