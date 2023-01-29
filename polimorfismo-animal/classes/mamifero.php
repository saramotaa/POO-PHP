<?php
require_once 'animal.php';
class Mamifero extends Animal{ //Herança para diferença
  private $corPelo;

  public function locomover(){
    echo "<p>MAMÍFERO: *Correndo*</p>";
  }

  public function alimentar(){
    echo "<p>MAMÍFERO: *Mamando*</p>";
  }

  public function emitirSom(){
    echo "<p>MAMÍFERO: *Som de Mamífero*</p>";
  }
  
  public function getCorPelo()
  {
  return $this->corPelo;
  }
  public function setCorPelo($corPelo)
  {
  $this->corPelo = $corPelo;
  return $this;
  }
}
?>