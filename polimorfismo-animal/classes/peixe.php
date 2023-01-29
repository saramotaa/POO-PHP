<?php
require_once 'animal.php';
class Peixe extends Animal{ //Herança para diferença
  private $corEscama;

  public function soltarBolha(){
    echo "<p>PEIXE: *Soltou uma bolha*</p>";
  }

  public function locomover(){
    echo "<p>PEIXE: *Nadar*</p>";
  }

  public function alimentar(){
    echo "<p>PEIXE: *Comendo substâncias*</p>";
  }

  public function emitirSom(){
    echo "<p>PEIXE: *Peixe não faz som*</p>";
  }

  public function getCorEscama()
  {
  return $this->corEscama;
  }
  public function setCorEscama($corEscama)
  {
  $this->corEscama = $corEscama;
  return $this;
  }
}
?>