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
			<a class="navbar-brand" href="home.php"><img src="img/loguinho.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
				</ul>
			</div>
		</div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="18000" style="width:100%">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <video class="video-fluid z-depth-1" autoplay loop controls muted style="width:100%; height:100%">
  <source src="img/frutas1.mp4" type="video/mp4" alt="Primeiro Slide"> />
</video>
      <div class="carousel-caption text center">
      <h1> "A saúde não está apenas na forma física, mas também na alimentação". </h1>
      <a class="btn btn-outline-light btn-lg" href="imc.php">Índice de Massa Corporal (IMC)</a>
      <a class="btn btn-outline-light btn-lg" href="tabela.php">Informações Nutricionais</a>
      </div>
    </div>
    <div class="carousel-item">
    <video class="video-fluid z-depth-1" autoplay loop controls muted style="width:100%; height:100%" >
  <source src="img/frutas2.mp4" type="video/mp4" alt="Primeiro Slide"> />
</video>
      <div class="carousel-caption text center">
      <h1> "Controlar sua alimentação é fundamental para uma vida saúdavel".</h1>
      <a class="btn btn-outline-light btn-lg" href="imc.php">Índice de Massa Corporal (IMC)</a>
      <a class="btn btn-outline-light btn-lg" href="tabela.php">Informações Nutricionais</a>
    </div>
</div>
    <div class="carousel-item">
    <video class="video-fluid z-depth-1" autoplay loop controls muted style="width:100%; height:100%">
  <source src="img/frutas3.mp4" type="video/mp4" alt="Primeiro Slide"> />
</video>
      <div class="carousel-caption text center">
      <h1> "Saúde: o seu valor só é reconhecido quando a perdemos".</h1>
      <a class="btn btn-outline-light btn-lg" href="imc.php">Índice de Massa Corporal (IMC)</a>
      <a class="btn btn-outline-light btn-lg" href="tabela.php">Informações Nutricionais</a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
	
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>