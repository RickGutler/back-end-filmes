<?php
require("../controler/configs.php");
require("../model/Filme.php");
session_start();
$css = "filme";

criarTopo($css);

if(@$_SESSION["adm"] == 1){

    echo '<main>
    <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Acesso de administrador</h1>
        <p class="lead text-muted">Como administrador adicione os filmes do nosso site!</p>
        <p>
          <a href="formularioFilme.php" class="btn btn-primary my-2">Adicionar</a>
        </p>
      </div>
    </div>
  </section>
  <div class="">
  <div class="container-filmes">';

    foreach(Filme::ler() as $dado){
      echo '  <div class="container-filmes">
      <div class="col-filmes">
      <div class="">
        <img class="bd-placeholder-img card-img-top" src="../imgFilme/'.$dado["imgFilme"].'" width="75%" height="250" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"></rect></img>
        <div class="card-body">
          <h1 class="tituloFilme">'.$dado["nomeFilme"].'</h1>
          <p class="card-text">'.$dado["sinopse"].'</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="editarFilme.php?msg='.$dado["codFilme"].'"><button type="button" class="btn btn-sm btn-outline-secondary ">Editar</button></a>
              <a href="../controler/deletarFilme.php?msg='.$dado["codFilme"].'><button type="button" class="btn btn-sm btn-outline-secondary mx-auto">Excluir</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>';
    }
  echo '</div>';


} else {
  echo '<main>
  <section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Filmes</h1>
    </div>
  </div>
  </section>
  <div>
        <div class="container-filmes">';
          foreach(Filme::ler() as $dado){
          echo '<div class="container-filmes">
          <div class="col-filmes">
          <div class="card-filmes">
          <img class="img-filmes" src="../imgFilme/'.$dado["imgFilme"].'" width="100%" height="300" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"></rect></img>
          <div class="card-body">
          <h1 class="tituloFilme">'.$dado["nomeFilme"].'</h1>
          <p class="card-text">'.$dado["sinopse"].'</p>
          <div class="">
          </div>
        </div>
    </div>
  </div>
  </div>';
  }
  echo '</div>';
}

criarFooter();
