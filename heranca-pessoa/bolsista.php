<?php
require_once 'aluno.php';
class Bolsista extends Aluno{ 
  private $bolsa;


  public function renovarBolsa($rBo){
    $this->setBolsa($rBo); //porcentagem
    $this->setMensalidade(1300 - (($rBo/100)*1300));
    echo "<p>- Bolsa de <strong>" . $this->getBolsa() . "%</strong> renovada para <strong>" . $this->getNome() . "</strong>, tendo a mensalidade de <strong>R$" . $this->getMensalidade() . ",00</strong>.</p>";
  }

  public function pagarMensal(){
    if ($this->getSexo() == "M") {
      echo "<p>- Pagando mensalidade de <strong>R$" . $this->getMensalidade() . ",00</strong> do aluno bolsista " . $this->getNome() . ".</p>";
    } else {
    echo "<p>- Pagando mensalidade de <strong>R$" . $this->getMensalidade() . ",00</strong> da aluna bolsista <strong>" . $this->getNome() . "</strong>.</p>";
    }
  }

  public function __construct(){}

  public function getBolsa(){
  return $this->bolsa;
  }
  public function setBolsa($bolsa){
  $this->bolsa = $bolsa;
  return $this;
  }
}
?>