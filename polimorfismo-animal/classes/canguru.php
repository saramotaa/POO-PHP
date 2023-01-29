<?php
require_once 'mamifero.php';
class Canguru extends Mamifero{

  public function usarBolsa(){
    echo "<p>CANGURU: *Usou a bolsa*</p>";
  }

  public function locomover(){
    echo "<p>CANGURU: *Saltando*</p>";
  }
}  
?>
