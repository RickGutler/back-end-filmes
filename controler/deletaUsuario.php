<?php
session_start();

require ('../model/mysql.php');
require ('../model/Usuario.php');

$usuario = new Usuario(null, null, $_SESSION["cod"]);
$verificacao = $usuario->deletar();

if($verificacao == true){
    session_destroy();
    header("Location: ../view/index.php");
} else{
    header("Location: ../view/configuracoes.php");
}

?>