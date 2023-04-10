<?php
require("../model/Filme.php");
require("../controler/configs.php");
session_start();
$codFilme = $_GET["msg"];
$filme = new Filme();
$dados = $filme->lerByID($codFilme);

if($_SESSION["logado"] == 1 && $_SESSION["adm"] == 1){
    criarTopo("formularioFilme");

    echo '<div class="container-form">
    <h1 class="titulo">Edite o filme</h1>
    <form action="../controler/editarFilme.php" method="POST" enctype="multipart/form-data">                   <label><input name="codFilme" class"input" type="text" value="'.$codFilme.'" readonly="readonly"    style="display: none;"></label>
      <div class="mb-3">
        <label>Nome do Filme</label>
        <input name="nomeFilme" class="input" type="text" value="'.$dados[0]["nomeFilme"].'" placeholder="Digite o nome do filme" required>
        <div id="emailHelp" class="form-text">
        <p>Coloque a sinopse embaixo</p>
      </div>
      </div>
      <div class="mb-3">
      <textarea rows = "7" cols="50"name="sinopse">'.$dados[0]["sinopse"].'</textarea>
        <div id="emailHelp" class="form-text">
          <p>Adicione uma imagem abaixo</p>
        </div>
      </div>
      <div class="img-select mb-3">
      <label>Imagem do produto</label>
      <div><input name="imgFilme" type="file"></div>
      </div>
      <button type="submit" class="btn btn-primary">Editar</button>
      </form>';
    criarFooter();
} else{
    header("Location: index.php");
}

?>