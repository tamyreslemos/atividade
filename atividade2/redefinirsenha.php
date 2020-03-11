<?php
	session_start();

    if ($_POST) {
       // echo "Cadastro realizado!";
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['senha'] = $_POST['senha'];
        //header('Location: projeto2.php');
?>
        <script>
            alert("Senha cadastrada com sucesso!");
            window.location.href ="projeto2.php";
        </script>
<?php
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

    <title>Redefinir Senha</title>
  </head>
  <body>

  	<h2 style="text-align: center; margin-top: 20px;">Redefinir Senha</h2>

  	<div class="container">
  		<div class="row">
  			<div class="col-12">
			  	<h4>Usuario: <?=$_SESSION['usuario']; ?></h4>
			  	<h4>Senha: <?=$_SESSION['senha']; ?></h4>
		  	</div>
	  	</div>


	<form  method="POST" action="" id="form-novo">
		
    <div class="form-group">
			<label for="usuario">Usuario</label>
			<input type="usuario" class="form-control" id="input-usuario" name="usuario" placeholder="Digite o nome do usuario" required="required">
		</div>

		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" class="form-control" id="input-senha" name="senha" placeholder="Digite a senha" required="required">
		</div>
		
        <div class="form-group">
			<label for="senha">Redigite sua Senha</label>
			<input type="password" class="form-control" id="input-senha-re" name="re_senha" placeholder="Confirme a senha" required="required">
		</div>

		<button type="button" class="btn btn-dark" onclick="validarSenha()"> Enviar</button>
	</form>

</div>
	<script>
        
    	function validarSenha() {
    		var novaSenha = document.getElementById('input-senha').value;
    		var CnovaSenha = document.getElementById('input-senha-re').value;
            var formNovo = document.getElementById('form-novo');

    		if(novaSenha != CnovaSenha){
    			alert("Senhas não coincidem, por favor tente novamente!");

    		} else {
    			/*alert("Usuario cadastrado com sucesso!");
                window.location.href ="projeto2.php";*/
                formNovo.submit();
            }
        }

    </script>

</body>
</html>









