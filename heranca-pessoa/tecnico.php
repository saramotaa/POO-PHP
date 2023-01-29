<?php
require_once 'aluno.php';
class Tecnico extends Aluno{ 
  private $registroProfissional;

  public function praticar(){
    echo "<p>- <strong>" . $this->getNome() . "</strong> praticou bastante e agora está muito melhor!</p>";
  }

  public function pagarMensal(){
    $this->mensalidade = 450;
    if ($this->getSexo() == "M") {
      echo "<p>- Pagando mensalidade de <strong>R$" . $this->mensalidade . ",00</strong> do aluno técnico <strong>" . $this->getNome() . "</strong>.</p>";
    } else {
    echo "<p>- Pagando mensalidade de <strong>R$" . $this->mensalidade . ",00</strong> da aluna técnica <strong>" . $this->getNome() . "</strong>.</p>";
    }
  }

  public function __construct($rp){
    $this->registroProfissional = $rp;
  }

  public function getRegistroProfissional(){
  return $this->registroProfissional;
  }
  public function setRegistroProfissional($registroProfissional){
  $this->registroProfissional = $registroProfissional;
  return $this;
  }
}
?>