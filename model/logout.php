<?php 
	session_start();
	session_destroy();
	//echo "passei logout 1";
	header('Location: ../index.php');
	exit();
?>