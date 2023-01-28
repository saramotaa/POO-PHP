<?php
require_once 'pessoa.php';
class Funcionario extends Pessoa{
  private $setor;
  private $trabalhando;

  public function mudarTrabalho($t){
    if ($this->trabalhando){
      $this->setSetor($t);
      if ($this->getSexo() == "M") {
        echo "<p>- Parabéns! " . $this->getNome() . " foi contratado para o cargo de " . $t . "!</p>";
      } else {
        echo "<p>- Parabéns! " . $this->getNome() . " foi contratada para o cargo de " . $t . "!</p>";
      }
      
    } elseif ($this->getSexo() == "M") {
      echo "<p>ERRO: Não é possível mudar de setor pois " . $this->getNome() . " está desempregado!</p>";
    } else {
      echo "<p>ERRO: Não é possível mudar de setor pois " . $this->getNome() . " está desempregada!</p>";
    }
  }

  public function contratado($emp){
    $this->trabalhando = true;
    $this->setor = $emp;
  }

  public function demitido(){
    $this->setTrabalhando(false);
    $this->setSetor(false);
  }

  public function __construct(){
    $this->trabalhando = false;
  }

  public function getSetor(){
  return $this->setor;
  }
  public function setSetor($setor){
  $this->setor = $setor;
  return $this;
  }

  public function getTrabalhando(){
  return $this->trabalhando;
  }
  public function setTrabalhando($trabalhando){
  $this->trabalhando = $trabalhando;
  return $this;
  }
}
?>