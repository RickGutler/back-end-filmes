<?php
require("../model/Filme.php");

$nomeFilme = $_POST["nomeFilme"];
$sinopse = $_POST["sinopse"];
$filme;

if(isset($_FILES["imgFilme"])){ 
    $img = $_FILES["imgFilme"];

    $pasta = "../imgFilme/"; 
    $nomeImg = $img["name"];

    move_uploaded_file($img["tmp_name"], $pasta . $nomeImg); 
    $filme = new Filme($nomeFilme, $sinopse, $nomeImg); 
}else{
    $filme = new Filme($nomeFilme, $sinopse, "img-padrao.jpg");
}

$filme->criar();

header("Location: ../View/filmes.php");




?>