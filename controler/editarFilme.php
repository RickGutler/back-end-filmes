<?php
require("../model/Filme.php");

$nomeFilme = $_POST["nomeFilme"];
$sinopse = $_POST["sinopse"];
$codFilme = $_POST["codFilme"];
$filme;

if(isset($_FILES["imgFilme"])){ 
    $img = $_FILES["imgFilme"];

    $pasta = "../imgFilme/";
    $nomeImg = $img["name"];

    move_uploaded_file($img["tmp_name"], $pasta . $nomeImg);

    $filme = new Filme($nomeFilme, $sinopse, $nomeImg, $codFilme);
}else{
    $filme = new Filme($nomeFilme, $sinopse, "img-padrao.jpg", $codFilme);
}

$filme->editar();

header("Location: ../View/filmes.php");
?>