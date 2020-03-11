<?php
   $conexao = mysqli_connect("localhost","root","");

   	if(!$conexao)
   		echo "Erro ao estabelecer conexão";

   	mysqli_select_db($conexao, "meubanco");

   	if($_GET && $_GET['error'] && $_GET['error'] == "logado"){
   		echo "Você precisa efetuar login!";
   	}

   	session_start();

	$mensagem = '';

   if($_POST){
  //  	 if ($_POST['usuario'] == $_SESSION['usuario'] && $_POST['senha'] == $_SESSION['senha']){
  //   	header('Location: paineldecontrole.php');
	 // } else {
	 // 	$mensagem = "Usuario não cadastrado!";
	 // }
   	$nome = $_POST['usuario'];
   	$senha = $_POST['senha'];
   	$consulta = mysqli_query($conexao, "SELECT * FROM cliente WHERE nome = '".$nome."' AND senha = '".md5($senha)."' ");
   	
   	if($consulta->num_rows > 0){
   		$_SESSION['logado'] = 1;
   		header('Location: paineldecontrole.php');
   	   		//while ($tabela = mysqli_fetch_array($consulta)){
   	   		//echo $tabela["nome"];
   	 		//}
	 } else {
	  	$mensagem = "Usuario não cadastrado!";
   	}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Atividade 2</title>
  </head>
  <body>

		<h2 style="text-align: center; margin-top: 20px;">Área de Login</h2>


		
	<div class="container">
		<form action="" method="POST">
			
				<div class="form-group">
					<label for="usuario">Usuario</label>
					<input type="usuario" class="form-control" name="usuario" id="exampleInputUsuario1" placeholder="Digite o nome do usuario" required="required">
				</div>
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Digite a senha" required="required">
				</div>

				<button type="submit" class="btn btn-dark">Enviar</button>

		<?php
			if ($mensagem != '' ) {
				echo $mensagem;

			}
		?>
			
		</form>

		
			<div class="row">
				<div class="col-12" style="margin-top: 15px;">
					<a href="novousuario.php">Novo Usuario</a>
				
					<a href="redefinirsenha.php">Esqueceu Senha</a>
				</div>
			</div>
		</div>


  </body>
</html>