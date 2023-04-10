<?php
require("../model/Avaliacao.php");


$nomeFilme = $_POST["nomeFilme"];
$descricao = $_POST["descricao"];
$codAvaliacao = $_POST["codAvaliacao"];
$estrela = $_POST["estrela"];

$avaliacao = new Avaliacao($nomeFilme,$descricao,$estrela,$codAvaliacao);
$avaliacao->editar();

header("Location: ../view/reviews.php");