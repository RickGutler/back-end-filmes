<?php
require("../model/mysql.php");
require("../model/Avaliacao.php");

$nomeFilme = $_POST["nomeFilme"];
$descricao = $_POST["descricao"];
$estrela = $_POST["estrela"];

$usuario = new Avaliacao($nomeFilme,$descricao,$estrela);
$usuario->criar();

header("Location: ../view/reviews.php");

?>