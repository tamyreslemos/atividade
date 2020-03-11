<?php
$conexao = mysqli_connect("localhost","root","");

   	if(!$conexao)
   		echo "Erro ao estabelecer conexão";

   	mysqli_select_db($conexao, "meubanco");
   	session_start();
   	session_destroy();
   	mysqli_close($conexao);

   	header('Location: projeto2.php');


?>

