
<?

$nome = $_POST['nome'];

$date=date_create($_POST['datadenascimento']);
$datadenascimento = date_format($date,"d/m/Y");

$email = $_POST['email'];



// echo "Nome do Usuário: " .$nome;
// echo "Data de Nascimento: " .$datadenascimento;
// echo "E-mail: " .$email;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type">
	<title>Programação Web</title>
</head>

<body>
	<header style="background-color: black; text-align: center; padding: 15px; color: white; font-size: 20px;">
      Exercício - Programação Web
    </header>
	

	<div>
		<p>Nome do Usuário: <? echo $nome; ?></p>
		<p>Data de Nascimento: <? echo $datadenascimento; ?></p>
		<p>E-mail: <? echo $email; ?></p>
	</div>

	
	<script>
		alert("Cadastro efetuado com sucesso!");	
	</script>
</body>
</html>