<?php
require ('../model/mysql.php');
require ('../model/Usuario.php');


$login = $_POST["login"];
$senha = $_POST["senha"];

$usuario = new Usuario($login, $senha);
$usuario->criar();

header("Location: ../view/index.php");
?>