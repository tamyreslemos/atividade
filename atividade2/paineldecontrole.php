<?php
	session_start();

    if ($_POST) {
       // echo "Cadastro realizado!";
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['senha'] = $_POST['senha'];
        //header('Location: projeto2.php');
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Seja bem Vindo</title>
</head>
<body>

	<h1>Seja Bem Vindo!!</h1>

	<br>

	<a href="../index.html">Voltar</a>

</body>
</html>