<?php
require ('../model/mysql.php');
require ('../model/Usuario.php');
session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];

$usuario = new Usuario($login, $senha, $_SESSION["cod"]);
$usuario->editar();

header("Location: ../view/index.php");
?>