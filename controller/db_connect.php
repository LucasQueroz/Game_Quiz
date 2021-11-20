<?php

$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "java_programador_db";

$connect = mysqli_connect($hostname, $user, $password, $db_name);
mysqli_set_charset($connect, "utf8"); 

/*if(mysqli_connect_error()){
	print "Falha na conexão" . mysqli_connect_error();
 }
 else{
	print "Sem falha na conexão com o Banco de Dados";
}*/
?>