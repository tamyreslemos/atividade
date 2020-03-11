<?php
	session_start();

    if($_SESSION['logado'] != 1){
        header('Location: projeto2.php?error=logado');
    }

    $conexao = mysqli_connect("localhost","root","");

   	 if(!$conexao)
   		echo "Erro ao estabelecer conexão";

   	 mysqli_select_db($conexao, "meubanco");
   	
   	if($_POST){
	   	mysqli_query($conexao, "
	   	 	INSERT INTO produto
	   		(nome, preco, quant_estoque) VALUES
	   		('".$_POST["nome"]."', '".$_POST["preco"]."', '".$_POST["quantidade"]."')
	   	 ");
   	}

   	$dados = [];

   	$consulta = mysqli_query($conexao, "SELECT * FROM produto ORDER BY preco ASC");

   	if($_GET && $_GET['ordem'] && $_GET['ordem'] == "desc"){
   		$consulta = mysqli_query($conexao, "SELECT * FROM produto ORDER BY preco DESC");
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

		<title>Cadastro de Produtos</title>
		<style type="text/css">
			.btn-center{
				display: block;
				margin-top: 20px;
				margin-left: auto;
				margin-right: auto;
			}
		</style>
	</head>

<body class="bg-light">
	<div class="container">
		<div class="py-5 text-center">
			<h2>Cadastro de Produtos</h2>
		</div>
		<form class="form-group" method="POST">
			<div class="row">
				<div class="col-7">
					<label for="campo-nome">Nome</label>
					<input type="text" class="form-control" id="campo-nome" aria-describedby="emailHelp" name="nome">
				</div>
				<div class="col-2">
					<label for="campo-preco">Preço</label>
					<input type="text" class="form-control" id="campo-preco" aria-describedby="emailHelp" name="preco">
				</div>
				<div class="col-3">
					<label for="campo-quant">Quantidade em Estoque</label>
					<input type="text" class="form-control" id="campo-quant" aria-describedby="emailHelp" name="quantidade">
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<button type="submit" class="btn btn-secondary" style="margin-top: 15px">Inserir Produtos</button>
				</div>
			</div>
		</form>


		<div class="text-center">
			<h2>Listar Produtos</h2>
		</div>

		<div class="row justify-content-center align-items-center">
			<div class="col-3 ">
				<a href="./paineldecontrole.php" class="btn btn-secondary btn-center">Ordem Crescente</a>
			</div>
			<div class="col-3">
				<a href="?ordem=desc" class="btn btn-secondary btn-center">Ordem Decrescente</a>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-2">
				<a href="logoff.php" class="btn btn-danger btn-center">Logoff</a>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">
				<table class="table" style="margin-top: 15px;">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">NOME</th>
							<th scope="col">PREÇO</th>
							<th scope="col">QUANTIDADE EM ESTOQUE</th>
						</tr>
					</thead>
				<tbody>
					<?php
					if($consulta->num_rows > 0){
						while($produto = mysqli_fetch_array($consulta)){
					?>
					<tr>
						<th scope="row">
							<?php
								echo $produto['codigo']; 
							?>
						</th>
						<td>
							<?php
								echo $produto['nome'];
							?>
						</td>
						<td>
							<?php
								echo $produto['preco'];
							?>
						</td>
						<td>
							<?php
								echo $produto['quant_estoque'];
							?>
						</td>
					</tr>
					<?php
							}
						}
					?>
				</tbody>
				</table>
			</div>
		</div>
	</div>



</body>
</html>


