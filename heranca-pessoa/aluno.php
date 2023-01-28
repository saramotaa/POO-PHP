<?php
require_once 'pessoa.php';
class Aluno extends Pessoa{
  private $matr;
  private $curso;

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
}
?>