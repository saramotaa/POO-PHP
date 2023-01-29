<?php
require_once 'animal.php';
class Reptil extends Animal{ //Herança para diferença
  private $corEscama;

  public function locomover(){
    echo "<p>REPTIL: *Rastejando*</p>";
  }

  public function alimentar(){
    echo "<p>REPTIL: *Comendo comida de réptil*</p>";
  }

  public function emitirSom(){
    echo "<p>REPTIL: *Som de Réptil*</p>";
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