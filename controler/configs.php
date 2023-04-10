<?php

function criarTopo($arquivoCSS){

    echo '<!doctype html>
    <html lang="pt-br">
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>A NOMEAR - HOME</title>
      <script src="https://kit.fontawesome.com/a9b84d6db1.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/'.$arquivoCSS.'.css">
    </head>
      <body>
        <header class="p-3 text-bg-dark">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <h3>CineShark</h3>
              </a>
    
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 px-4">
                <li><a href="index.php" class="nav-link px-3 text-white">Home</a></li>
                <li><a href="filmes.php" class="nav-link px-3 text-white">Filmes</a></li>
                <li><a href="reviews.php" class="nav-link px-3 text-white">Reviews</a></li>
              </ul>
    
              <form class="d-flex px-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
    
              <div class="text-end">
                <a href="login.php"> <button type="button" class="btn btn-outline-light">Login</button></a>
              </div>
    
              <div class="text-end px-3">
                <a href="configuracoes.php"><button type="button" class="btn btn-outline-light"><i
                      class="fa-solid fa-user-gear"></i></button></a>
              </div>
    
              <div class="text-end px-3">
                <a href="../controler/sair.php"><button type="button" class="btn btn-outline-light">Sair</button></a>
              </div>
            </div>
          </div>
        </header>';

}

function criarFooter(){
    echo '<footer class="d-flex flex-wrap justify-content-around align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <span class="mb-3 mb-md-0 text-muted">© 2022 CineShark, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-4"><a class="text-muted" href="#"><i class="fa-brands fa-twitter"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"></i></a></li>
    </ul>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    </body>

    </html>';
}
