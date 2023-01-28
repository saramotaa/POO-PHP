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
    echo "<p>- " . $this->getNome() . " recebeu um aumento de R$" . $v . ",00 e agora recebe um salário de R$" . $this->salario .  ",00!</p>";
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