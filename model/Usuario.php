<?php
//Orientação a Objetos
//https://www.php.net/manual/en/language.oop5.php
require("mysql.php");

class Usuario{
  private $login;
  private $senha;
  private $codigo;

  public function __construct($login = null, $senha = null, $codigo = null)
  {
    $this->login = $login;
    $this->senha = md5($senha);
    $this->codigo = $codigo; // cuidado porque quem gera nosso codigo de usuario é o Banco de Dados através do AI - auto incrementa
  }


  public function getLogin() {
    return $this->login;
  }

  public function setLogin($login){
    $this->login = $login;
  }

  public function setSenha($senha){
    $this->senha = $senha;
  }

  public function getSenha(){
    return $this->senha;
  }

  public function setCodigo($codigo){
    $this->codigo = $codigo;
  }

  public function getCodigo(){
    return $this->codigo;
  }

  public function criar(){

    global $mysql;



    $resultado = $mysql->prepare("INSERT INTO `usuário` (`cod`, `login`, `senha`) VALUES (NULL, ?, ?);");
    $resultado->bind_param("ss", $this->login, $this->senha);
    $resultado->execute();

    if ($resultado->affected_rows > 0) {
      return true;
    } else {
      return false;
    }
  }

  static function ler(){

    global $mysql; 

    $resultado = $mysql->prepare("SELECT * FROM `usuário`");
    $resultado->execute();
    $dados = $resultado->get_result();

    //echo $dados->num_rows;
    $dado = $dados->fetch_all(MYSQLI_ASSOC); //fech_num para receber os parametros em indices

    return $dado;
  }


  public function lerByID($codigo){

    global $mysql;

    $resultado = $mysql->prepare("SELECT * FROM `usuário` WHERE cod = ?");
    $resultado->bind_param("i", $codigo);
    $resultado->execute();
    $dados = $resultado->get_result();

    //echo $dados->num_rows;
    $dado = $dados->fetch_all(MYSQLI_ASSOC); //fech_num para receber os parametros em indices

    return $dado;
  }

  public function imprimir(){
    print_r($this);
  }

  static function imprimirusuarios(){
    //$a = new Usuario();
    print_r(self::ler());
  }

  public function editar(){
    global $mysql;

    $codigo = $this->codigo;
    $login = $this->login;
    $senha = $this->senha;

    $resultado = $mysql->prepare("UPDATE `usuário` SET `login` = ?, `senha` = ? WHERE `usuário`.`cod` = ?;");
    $resultado->bind_param("ssi", $login, $senha, $codigo); //i representa uma variável inteira -> https://www.php.net/manual/en/mysqli-stmt.bind-param.php
    $resultado->execute();

    echo $resultado->affected_rows;

    if ($resultado->affected_rows > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function deletar(){
    global $mysql;

    $resultado = $mysql->prepare("DELETE FROM `usuário` WHERE `usuário`.`cod` = ?");
    $resultado->bind_param("i", $this->codigo); //i representa uma variável inteira -> https://www.php.net/manual/en/mysqli-stmt.bind-param.php
    $resultado->execute();

    if ($resultado->affected_rows > 0) {
      return true;
    } else {
      return false;
    }
  }
}
