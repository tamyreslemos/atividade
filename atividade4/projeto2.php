<?php
	session_start();

	$mensagem = '';

   if($_POST){
   	 if ($_POST['usuario'] == $_SESSION['usuario'] && $_POST['senha'] == $_SESSION['senha']){
    	header('Location: paineldecontrole.php');
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
    <style>
    	body{
    		background-image: url(patrulha-canina.jpg);
    		background-repeat: no-repeat;
    		background-size: cover;
    	}

    </style>
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



