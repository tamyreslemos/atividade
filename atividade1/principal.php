<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Programação Web</title>
  </head>
  <body>

    <header style="background-color: black; text-align: center; padding: 15px; color: white; font-size: 20px;">
      Exercício - Programação Web
    </header>
<form action="valida.php" method="POST" style="margin-top: 20px;">
  <div class="container">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName">Nome do Usuário</label>
        <input type="text" class="form-control" id="inputName" name="nome">
      </div>
      <div class="form-group col-md-6">
        <label for="inputDate4">Data de Nascimento</label>
        <input type="date" class="form-control" id="inputDate4" name="datadenascimento">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="input-email">Email</label>
        <input type="email" class="form-control" id="input-email" name="email">
      </div>
      <div class="form-group col-md-6">
        <label for="input-email-re">Confirmar E-mail</label>
        <input type="email" class="form-control" id="input-email-re" onblur="comparaEmails()">
      </div>
    </div>
    
    <button type="submit" class="btn btn-dark">Enviar</button>

  </div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
      function comparaEmails(){
        var email = document.getElementById('input-email').value;

        var emailre = document.getElementById('input-email-re').value;

        if(email != emailre){
          alert("E-mails não coincidem!")
        }
      }

    </script>
  </body>
</html>