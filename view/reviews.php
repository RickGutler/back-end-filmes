<?php
require("../controler/configs.php");
require("../model/Avaliacao.php");
session_start();

$css = "index";

if ($_SESSION["logado"] == 1) {
  criarTopo($css);
  

  echo '<section class="py-5 text-center container">
<div class="row py-lg-3">
  <div class="col-lg-6 col-md-8 mx-auto">
    <h2 class="fw-light">Reviews!</h2>
    <p class="text-muted">Avalie filmes nessa parte do site e veja opiniões de outros usuários também! Uma boa guia para quem quer escolher o melhor filme!</p>
    <p>
      <a href="adicionarAvaliacao.php" class="btn btn-primary my-2">Adicionar</a>
    </p>
  </div>
</div>
</section>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Estrelas</th>
      <th scope="col">Nome do Filme</th>
      <th scope="col">Avaliacao</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
    </thead>';
    foreach (Avaliacao::ler() as $dado) {
      echo '<tr>
          <td class="px-3">' . $dado["estrelas"] . '<i class="fa-solid fa-star"></i></td>
          <td>' . $dado["nomeFilme"] . '</td>
          <td>' . $dado["descricao"] . '</td>
          <td><a class="px-3" href="editarAvaliacao.php?msg=' . $dado["codAvaliacao"] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
          <td><a class="px-3" href="../controler/deletarAvaliacao.php?msg=' . $dado["codAvaliacao"] . '"><i class="fa-solid fa-trash"></i></a></td>
          </tr>';
    
    };
    echo '</table>';

    criarFooter();
} else {
  header("Location: login.php");
}

