<?php
require ("../controler/configs.php");
session_start();

$css = "login";

criarTopo($css);

echo '<div class="container-form">
      <h1 class="titulo">Cadastre aqui</h1>
      <form action="../controler/cadastraUsuario.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Login</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira seu login" aria-describedby="emailHelp" name="login" required>
          <div id="emailHelp" class="form-text">Insira abaixo sua senha</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha" name="senha">
          <div id="emailHelp" class="form-text"><a href="login.php">Já possui uma conta? Logue aqui</a></div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>';

criarFooter();
?>