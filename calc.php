<?php

session_start();
include 'conectar.php';


$massa = $_POST['massa'];
$altura = $_POST['altura'];
$imc = $_POST['imc'];
$situacao = $_POST['situacao'];


$cad = $con->prepare("INSERT INTO afericoes (altura, imc, massa, situacao)
VALUES (?, ?, ?, ?)");
$cad-> bindParam(1, $altura);
$cad-> bindParam(4, $imc);
$cad-> bindParam(5, $massa);
$cad-> bindParam(6, $situacao);

$cad->execute();

header('Location:imc.php');

?>