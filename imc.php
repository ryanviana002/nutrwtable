<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nutrwtable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="home.php"><img src="img/logo.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
				</ul>
			</div>
		</div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="tabela.php">Tabela</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Receitas & dicas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Ação</a>
          <a class="dropdown-item" href="#">Outra ação</a>
          <a class="dropdown-item" href="#">Algo mais aqui</a>
        </div>
      </li>
    </ul>
  </div>
	</nav>

    <br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <h2>Calculadora IMC</h2>
        </div>
    </div>
</div>
  <div class="form-row justify-content-center ">
    <div class="col-md-1 offset mb-4 ">
      <label for="massa">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Massa</label>
      <input type="number" class="form-control" name="massa" id="massa" placeholder="Insira seu peso" required>
      <div class="invalid-feedback">
        Entre com um valor para o seu peso.
      </div>
    </div>
    <div class="col-md-1 offset mb-4">
      <label for="altura">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Altura</label>
      <input type="text" class="form-control" name="altura" id="altura" placeholder="Insira uma altura" required>
      <div class="invalid-feedback">
        Entre com um valor para a sua altura.
      </div>
    </div>
    <div class="col-md-1 offset mb-4">
      <label for="inlineFormCustomSelect">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gênero</label>
      <select class="custom-select mr-sm-2" name="sexo" id="sexo">
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
      </select>
    </div>
  </div>
  <div class="form-row justify-content-center">
    <div class="col-md-1 mb-4">
      <label for="imc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMC</label>
      <input type="text" class="form-control" name="imc" id="imc" readonly>
    </div>
    <div class="col-md-1 mb-4">
      <label for="situacao">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Situação</label>
      <input type="text" class="form-control" name="situacao" id="situacao" readonly>
    </div>
  </div>

  <div class="form-row justify-content-center">
    <div class="col-md-1 mb-6">
        <button class="btn btn-info btn-block" type="button" onclick="status()">Calcular IMC</button>
    </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script src="js/funcoes.js"></script>
<script>

function imccalc(){

var massa;
var altura;
var imc;

massa = document.getElementById('massa').value;
altura = document.getElementById('altura').value;
imc = (massa / (altura*altura));

document.getElementById('imc').value = imc;

}

function status(){

imccalc();
var sexo;
var situacao;
var userimc;

userimc = document.getElementById('imc').value;
sexo = document.getElementById('sexo').value;

switch(sexo){
    
    case 'M':
        if(userimc < 20){
            situacao = 'Abaixo do peso';
        }
        else if(userimc <= 24.9){
            situacao = 'Peso normal';
        }
        else if(userimc <= 29.9){
            situacao = 'Obesidade leve';
        }
        else if(userimc <= 39.9){
            situacao = 'Obesidade moderada';
        }
        else
        {
            situacao = 'Obesidade morbida';
        }
    break;
    case 'F':
        if(userimc < 19){
            situacao = 'Abaixo do peso';
        }
        else if(userimc <= 23.9){
            situacao = 'Peso normal';
        }
        else if(userimc <= 28.9){
            situacao = 'Obesidade leve';
        }
        else if(userimc <= 38.9){
            situacao = 'Obesidade moderada';
        }
        else
        {
            situacao = 'Obesidade morbida';
        }
    break;
}

document.getElementById('situacao').value = situacao;
hoje();
}

</script>

</div>
</div>
</div>
    
</body>
<br><br><br><br><br><br><br><br>
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-1">
  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright by: Ryan Victor and Wesderley Braga &emsp;&emsp;
    <a href="home.php">Nutrwtable &emsp;&emsp;</a>
    <img src="img/logo2.png">
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>

