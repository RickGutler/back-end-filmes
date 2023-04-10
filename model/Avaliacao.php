 <?php
require ('mysql.php');

class Avaliacao {
    private $nomeFilme;
    private $descricao;
    private $codAvaliacao;
    private $estrelas;

  public function __construct($nomeFilme = null, $descricao = null, $estrelas = null, $codAvaliacao = null) {
    $this->nomeFilme = $nomeFilme;
    $this->descricao = $descricao;
    $this->estrelas = $estrelas;
    $this->codAvaliacao = $codAvaliacao; // cuidado porque quem gera nosso codigo de usuario é o Banco de Dados através do AI - auto incrementa
}

  public function getNomeFilme() {
    return $this->nomeFilme;
  }

  public function setNomeFilme($nomeFilme) {
    $this->nomeFilme = $nomeFilme;
  }

  public function setDescricao($descricao) {
    $this->descricao = $descricao;
  }

  public function getdescricao() {
    return $this->descricao;
  }

  public function setEstrelas($estrelas) {
    $this->estrelas = $estrelas;
  }

  public function getEstrelas() {
    return $this->estrelas;
  }

  public function setCodAvaliacao($codAvaliacao) {
    $this->codAvaliacao = $codAvaliacao;
  }

  public function getCodAvaliacao() {
    return $this->codAvaliacao;
  }
 
  public function criar() {

        global $mysql;

      
        $resultado = $mysql->prepare("INSERT INTO `avaliacao` (`codAvaliacao`, `nomeFilme`, `descricao`, `estrelas`) VALUES (NULL, ?, ?,?);");
        $resultado->bind_param("ssi", $this->nomeFilme, $this->descricao, $this->estrelas);
        $resultado->execute();

        if($resultado->affected_rows > 0) {
         return true;
        } else {
            return false;
        }
    }

    static function ler () {

        global $mysql;
        
        $resultado = $mysql->prepare("SELECT * FROM `avaliacao`");
        $resultado->execute();
        $dados = $resultado->get_result();
    
        //echo $dados->num_rows;
        $dado = $dados->fetch_all(MYSQLI_ASSOC); //fech_num para receber os parametros em indices
    
        return $dado;
    
    }

    
    public function lerByID ($codAvaliacao) {

    global $mysql;

    
    $resultado = $mysql->prepare("SELECT * FROM `avaliacao` WHERE codAvaliacao = ?");
    $resultado->bind_param("i", $codAvaliacao);
    $resultado->execute();
    $dados = $resultado->get_result();

    $dado = $dados->fetch_all(MYSQLI_ASSOC); //fech_num para receber os parametros em indices

    

    return $dado;
    }


    public function imprimir() {
        print_r($this);
    }

    static function imprimirusuarios() {
        //$a = new Usuario();
        print_r(self::ler());
    }

    public function editar() {
        global $mysql;
    
        $nomeFilme = $this->nomeFilme;
        $descricao = $this->descricao;
        $estrelas = $this->estrelas;
        $codAvaliacao = $this->codAvaliacao;
    
    
        $resultado = $mysql->prepare("UPDATE `avaliacao` SET `nomeFilme` = ?, `descricao` = ?, `estrelas` = ? WHERE `avaliacao`.`codAvaliacao` = ?;");
        $resultado->bind_param("ssii", $nomeFilme, $descricao, $estrelas, $codAvaliacao); //i representa uma variável inteira -> https://www.php.net/manual/en/mysqli-stmt.bind-param.php
        $resultado->execute();
    
        echo $resultado->affected_rows;
    
        if($resultado->affected_rows > 0) {          
            return true;
         } else {
             return false;
         }
    }

    public function deletar() {
   
        global $mysql;
    
    
        $resultado = $mysql->prepare("DELETE FROM `avaliacao` WHERE `avaliacao`.`codAvaliacao` = ?");
        $resultado->bind_param("i", $this->codAvaliacao); //i representa uma variável inteira -> https://www.php.net/manual/en/mysqli-stmt.bind-param.php
        $resultado->execute();
    
        if($resultado->affected_rows > 0) {      
            return true;
         } else {
             return false;
         }
    } 
}
?>