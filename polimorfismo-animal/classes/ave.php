<?php
require_once 'animal.php';
class Ave extends Animal{ //Herança para diferença
  private $corPena;

  public function fazerNinho(){
    echo "<p>AVE: *Construiu um ninho*</p>";
  }

  public function locomover(){
    echo "<p>AVE: *Voar*</p>";
  }

  public function alimentar(){
    echo "<p>AVE: *Comendo frutas*</p>";
  }

  public function emitirSom(){
    echo "<p>AVE: *Som de Ave*</p>";
  }
  
  public function getCorPena()
  {
  return $this->corPena;
  }
  public function setCorPena($corPena)
  {
  $this->corPena = $corPena;
  return $this;
  }
}
?>