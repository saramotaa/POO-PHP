<?php
require_once 'pessoa.php';
class Professor extends Pessoa{
  private $especialidade;
  private $salario;

  public function __construct(){
    $this->salario = 2400;
  }

  public function receberAum($v){
    $this->salario += $v;
    echo "<p>- <strong>" . $this->getNome() . "</strong> recebeu um aumento de <strong>R$" . $v . ",00</strong> e agora recebe um salário de <strong>R$" . $this->salario .  ",00</strong>!</p>";
  }

  public function getEspecialidade(){
  return $this->especialidade;
  }
  public function setEspecialidade($especialidade){
  $this->especialidade = $especialidade;
  return $this;
  }

  public function getSalario(){
  return $this->salario;
  }
  public function setSalario($salario){
  $this->salario = $salario;
  return $this;
  }
}
?>