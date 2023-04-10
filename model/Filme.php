<?php
require("mysql.php");
class Filme{
    private $nomeFilme;
    private $sinopse;
    private $imgFilme;
    private $codFilme;

    public function __construct($nomeFilme = null, $sinopse = null, $imgFilme = null, $codFilme = null) {
        $this->nomeFilme = $nomeFilme;
        $this->sinopse = $sinopse;
        $this->imgFilme = $imgFilme;
        $this->codFilme = $codFilme; // cuidado porque quem gera nosso codigo de usuario é o Banco de Dados através do AI - auto incrementa
    }

    public function getFilme() {
        return $this->nomeFilme;
    }
    
    public function setFilme($nomeFilme) {
        $this->nomeFilme = $nomeFilme;
    }

    public function getSinopse() {
      return $this->sinopse;
    }
  
    public function setSinopse($sinopse){
      $this->sinopse = $sinopse;
    }

    public function getImg() {
      return $this->imgFilme;
    }
  
    public function setImg($imgFilme){
      $this->imgFilme = $imgFilme;
    }

    public function getCodFilme() {
        return $this->codFilme;  
    }

    public function setCodFilme($codFilme) {
        $this->codFilme = $codFilme;
    }


    public function criar() {
        global $mysql;

        $resultado = $mysql->prepare("INSERT INTO `filme` (`codFilme`, `nomeFilme`, `sinopse`, `imgFilme`) VALUES (NULL, ?, ?, ?);");
        $resultado->bind_param("sss", $this->nomeFilme, $this->sinopse, $this->imgFilme);
        $resultado->execute();

        if($resultado->affected_rows > 0) {
          return true;
        } else {
          return false;
        }
    }
    
    static function ler(){

    global $mysql;

    $resultado = $mysql->prepare("SELECT * FROM `filme`");
    $resultado->execute();
    $dados = $resultado->get_result();

    $dado = $dados->fetch_all(MYSQLI_ASSOC); //fech_num para receber os parametros em indices

    return $dado;
  }


  public function lerByID($codFilme){

    global $mysql;

    $resultado = $mysql->prepare("SELECT * FROM `filme` WHERE codFilme = ?");
    $resultado->bind_param("i", $codFilme);
    $resultado->execute();
    $dados = $resultado->get_result();

    $dado = $dados->fetch_all(MYSQLI_ASSOC);
    return $dado;
  }


  public function imprimir(){
    print_r($this);
  }

  static function imprimirFilmes(){
    print_r(self::ler());
  }

  public function editar(){
    global $mysql;

    $resultado = $mysql->prepare("UPDATE `filme` SET `nomeFilme` = ?, `sinopse` = ?, `imgFilme` = ? WHERE `filme`.`codFilme` = ?;");
    $resultado->bind_param("sssi", $this->nomeFilme, $this->sinopse, $this->imgFilme, $this->codFilme);
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

    $resultado = $mysql->prepare("DELETE FROM `filme` WHERE `filme`.`codFilme` = ?");
    $resultado->bind_param("i", $this->codFilme);
    $resultado->execute();

    if ($resultado->affected_rows > 0) {
      return true;
    } else {
      return false;
    }
  }

}
