<?php
session_start();

require ('../model/mysql.php');

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

$_SESSION["login"] = $login;
$_SESSION["senha"] = $senha;

$resultado = $mysql->prepare("SELECT * FROM `usuário` WHERE `login` LIKE ? AND `senha` LIKE ?");
$resultado->bind_param("ss", $login, $senha);
$resultado->execute();

$dados = $resultado->get_result();

$numerolinhas =  $dados->num_rows;

$dado = $dados->fetch_all(MYSQLI_ASSOC);

if($numerolinhas == 0) {
    $_SESSION["logado"] = 0;
    header("Location: ../view/login.php");
} else {
    $_SESSION["logado"] = 1;
    $_SESSION["cod"] = $dado[0]["cod"];
    $_SESSION["adm"] = $dado[0]["adm"];
    header("Location: ../view/index.php");
}
?>