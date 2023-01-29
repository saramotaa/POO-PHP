<?php
require_once 'pessoa.php';
class Aluno extends Pessoa{ //Herança para diferença
  protected $matr;
  protected $curso;
  protected $mensalidade;

  public function pagarMensal(){
    $this->mensalidade = 1300;
    if ($this->getSexo() == "M") {
      echo "<p>- Pagando mensalidade de <strong>R$" . $this->mensalidade . ",00</strong> do aluno " . $this->getNome() . ".</p>";
    } else {
    echo "<p>- Pagando mensalidade de <strong>R$" . $this->mensalidade . ",00</strong> da aluna <strong>" . $this->getNome() . "</strong>.</p>";
    }
  }

  public function cancelarMatr(){
    if ($this->matr = true){
      $this->matr = false;
      $this->curso = false;
      echo "<p>CONCLUÍDO: Matrícula cancelada!</p>";
    } else {
      echo "<p>ERRO: Matrícula não pode ser cancelada.</p>";
    }
  }

  public function fazerMatr($ma, $cu){
    if ($this->matr = false) {
      echo "<p>CONCLUÍDO: Matrícula feita com sucesso.</p>";
      $this->matr = $ma;
      $this->curso = $cu;
    } else {
      echo "<p>ERRO: Matrícula não pode ser feita.</p>";
    }
  }

  public function __construct(){
    $this->matr = false;
    $this->curso = false;
    //$this->setMatr = rand(1000, 2000);
  }

  public function getMatr(){
  return $this->matr;
  }
  public function setMatr($matr){
  $this->matr = $matr;
  return $this;
  }

  public function getCurso(){
  return $this->curso;
  }
  public function setCurso($curso){
  $this->curso = $curso;
  return $this;
  }

  public function getMensalidade(){
  return $this->mensalidade;
  }
  public function setMensalidade($mensalidade){
  $this->mensalidade = $mensalidade;
  return $this;
  }
}
?>