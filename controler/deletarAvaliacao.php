<?php
require ('../model/mysql.php');
require ('../model/Avaliacao.php');
session_start();


if($_SESSION["logado"] == 1){
    $codAvaliacao = $_GET["msg"];

    $avaliacao = new Avaliacao(null, null, null, $codAvaliacao);
    $verificacao = $avaliacao->deletar(); 
}

header("Location: ../view/reviews.php");


?>