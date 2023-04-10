<?php
require ('../model/mysql.php');
require ('../model/Filme.php');
session_start();

if($_SESSION["adm"] == 1){
    $codFilme = $_GET["msg"];

    $filme = new Filme(null, null, null, $codFilme);
    $verificacao = $filme->deletar();    
}

header("Location: ../view/filmes.php");


?>