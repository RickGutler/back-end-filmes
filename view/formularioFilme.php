<?php
require("../model/Filme.php");
require("../controler/configs.php");
session_start();

if($_SESSION["logado"] == 1 && $_SESSION["adm"] == 1){
    criarTopo("formularioFilme");

    echo '<div class="container-form">
    <h1 class="titulo">Edite o filme</h1>
    <form action="../controler/cadastrarFilme.php" method="POST" enctype="multipart/form-data">
       <div class="mb-3">
          <label>Nome do Filme</label>
          <input name="nomeFilme" class="input" type="text" placeholder="Digite o nome do filme" required>
          <div id="emailHelp" class="form-text">
          <p>Coloque a sinopse embaixo</p>
          </div>
      </div>
      <div class="mb-3">
      <textarea rows = "7" cols="50"name="sinopse"></textarea>
        <div id="emailHelp" class="form-text">
          <p>Adicione uma imagem abaixo</p>
        </div>
      </div>
      <div class="img-select mb-3">
      <label>Imagem do Filme</label>
      <div><input name="imgFilme" type="file"></div>
      </div>
      <button type="submit" class="btn btn-primary">Adicionar</button>
      </form>';
    criarFooter();
} else{
    header("Location: index.php");
}










?>