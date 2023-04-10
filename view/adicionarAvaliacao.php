<?php
require("../controler/configs.php");
session_start();

if($_SESSION["logado"] == 1){
    criarTopo("avaliacao");
    echo '<div class="container-form">
      <h1 class="titulo">Avalie um filme</h1>
      <form action="../controler/cadastrarAvaliacao.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label>Nome do Filme</label>
          <input name="nomeFilme" id="txtFilme" class="input" type="text" placeholder="Digite o nome do filme" required wrap="hard">
          <div id="emailHelp" class="form-text">
          <p>Avalie Abaixo</p>
        </div>
        </div>
        <div class="mb-3">
          <textarea rows = "5" cols="50"name="descricao"></textarea>
          <div id="emailHelp" class="form-text">
            <p>Dê as estrelas do filme</p>
          </div>
        </div>
        <div class="estrelas">
            <input type="radio" id="vazio" name="estrela" value="" checked>
            
            <label for="estrela_um"><i class="fa"></i></label>
            <input type="radio" id="estrela_um" name="estrela" value="1">
            
            <label for="estrela_dois"><i class="fa"></i></label>
            <input type="radio" id="estrela_dois" name="estrela" value="2">
            
            <label for="estrela_tres"><i class="fa"></i></label>
            <input type="radio" id="estrela_tres" name="estrela" value="3">
            
            <label for="estrela_quatro"><i class="fa"></i></label>
            <input type="radio" id="estrela_quatro" name="estrela" value="4">

            <label for="estrela_cinco"><i class="fa"></i></label>
            <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>    
        </div>
        <button type="submit" class="btn btn-primary">Avaliar</button>
      </form>
    </div>
    </div>';
    criarFooter();
} else{
    header("Location: login.php");
}
