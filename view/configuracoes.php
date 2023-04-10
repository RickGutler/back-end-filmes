<?php
require("../controler/configs.php");
require("../model/Usuario.php");
session_start();

$usuario = new Usuario();
$dados = $usuario->lerByID($_SESSION["cod"]);

if($_SESSION["logado"] == 1){
criarTopo("");

echo '<section class="py-5 text-center container">
        <div class="row py-lg-3">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light">Olá '.$dados[0]["login"].', o que deseja fazer?!</h2>
            <p class="text-muted">Aqui você pode editar seu usuário e sua senha se quiser!</p>
            <p class="text-muted">Por favor não delete sua conta, dedicamos muito tempo pra fazer o site de melhor qualidade :(</p>
            <p>
              <a href="formularioEdicao.php" class="btn btn-primary my-2">Editar</a>
              <a href="../controler/deletaUsuario.php" class="btn btn-primary my-2">Excluir</a>
            </p>
          </div>
        </div>
        </section>';

criarFooter();
} else{
header("Location: login.php");

}

?>