<?php
require("../controler/configs.php");
session_start();

$css = "index";

criarTopo($css);

echo '<main>
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="../imagens/undraw_home_cinema_l7yl.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
              width="350" height="400" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">O melhor site de filmes que você já viu!</h1>
            <p class="lead">Um site com uma diversidade de filmes para você assistir de casa. Além de uma aba de revisão
              para revisar os filmes que quiser!</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="login.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Logue
                  aqui</button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Os filmes mais famosos!</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <a href="filmes.php">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg no-repeat"
                style="background-image: url('.'../imagens/topgun.jpg'.');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-2">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Top Gun: Maverick</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                        class="rounded-circle border border-white">
                    </li>
                  </ul>
                </div>
              </div>
            </a>
          </div>

          <div class="col">
            <a href="filmes.php">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                style="background-image: url('.'../imagens/coringa.webp'.');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Coringa</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                        class="rounded-circle border border-white">
                    </li>
                  </ul>
                </div>
              </div>
            </a>
          </div>

          <div class="col">
            <a href="filmes.php">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                style="background-image: url('.'../imagens/barbie.jpg'.');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Barbie</h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                        class="rounded-circle border border-white">
                    </li>
                  </ul>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </main>';

criarFooter();
?>