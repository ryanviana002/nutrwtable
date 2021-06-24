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
    <?php 
        session_start();
        include 'conectar.php';
    ?>
</head>
<br><br><br><br><br><br><br><br>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <h2>Tabela Nutricional</h2>
        </div>
    </div>
</div>
	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="home.php"><img src="img/logo.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
				</ul>
			</div>
		</div>
    </nav>
<br><br>
<form method="POST" action="pcastanhas.php">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Digite o nome da castanha" aria-label="Recipient's username" name="pesquisar" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" value="buscar">🔎</button>
  </div>
  </form>
</div>
</body>
<?php
 $pesquisar = $_POST['pesquisar'];
 $query = "SELECT * FROM castanhas WHERE nome LIKE '%$pesquisar%' ORDER BY nome";
 $dados = $con->prepare($query);
 $dados->bindParam(1, $id);
 $dados->execute();


echo '<table class="table table-hover">';
    echo    '<thead>';
    echo        '<tr>';
    echo            '<th scope="col">ID</th>';
    echo            '<th scope="col">Nome</th>';
    echo            '<th scope="col">Calorias</th>';
    echo            '<th scope="col">Proteina</th>';
    echo            '<th scope="col">Carboidrato</th>';
    echo            '<th scope="col">Fibra</th>';
    echo            '<th scope="col">Gordura totais</th>';
    echo            '<th scope="col">Porção</th>';
    echo        '</tr>';
    echo    '</thead>';
    echo    '<tbody>';
    while($teste = $dados->fetch(PDO::FETCH_ASSOC)){
        echo        '<tr>';
        echo            '<th scope="row">'.$teste['id'].'</th>';
        echo            '<td>'.iconv(mb_detect_encoding($teste['nome'],"UTF-8,ISO-8859-1"),"UTF-8", $teste['nome']).'</td>';
        echo            '<td>'.$teste['calorias'].'</td>';
        echo            '<td>'.$teste['proteina'].'</td>';
        echo            '<td>'.$teste['carb'].'</td>';
        echo            '<td>'.$teste['fibra'].'</td>';
        echo            '<td>'.$teste['gordura'].'</td>';
        echo            '<td>'.iconv(mb_detect_encoding($teste['porcao'],"UTF-8,ISO-8859-1"),"UTF-8", $teste['porcao']).'</td>';
        echo        '</td>';
        echo        '</tr>';
    }
    echo    '</tbody>';
    echo '</table>'; 
?>

</body>
</html>
