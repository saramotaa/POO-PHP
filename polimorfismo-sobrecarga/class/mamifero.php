<?php
require_once 'animal.php';
class Mamifero extends Animal{
  protected $corPelo;
 
  public function emitirSom(){
    echo "<p>MAMÍFERO: *Som de Mamífero*</p>";
  }

  public function getCorPelo(){
  return $this->corPelo;
  }
  public function setCorPelo($corPelo){
  $this->corPelo = $corPelo;
  return $this;
  }
}
?>