<?php
require("../controler/configs.php");
require("../model/Usuario.php");
session_start();

$usuario = new Usuario();
$dados = $usuario->lerByID($_SESSION["cod"]);

if($_SESSION["logado"] == 1){
    $css = "login";
    
    criarTopo($css);

    echo '<div class="container-form">
    <h1 class="titulo">Edição do usuário</h1>
    <form action="../controler/editaUsuario.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Login</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira seu login"
          aria-describedby="emailHelp" name="login" value="'.$dados[0]["login"].'" required>
        <div id="emailHelp" class="form-text">Insira abaixo sua senha</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha" name="senha" required>
        <div id="emailHelp" class="form-text">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Editar</button>
    </form>
    </div>';
    
    criarFooter();
} else{
    header("Location: login.php");
}






?>