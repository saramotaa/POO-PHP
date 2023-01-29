<?php
require_once 'mamifero.php';
class Cachorro extends Mamifero{

  public function enterrarOsso(){
    echo "<p>CACHORRO: *Enterrou o osso*</p>";
  }

  public function abanarRabo(){
    echo "<p>CACHORRO: *Abanou o rabo*</p>";
  }

  public function emitirSom(){
    echo "<p>CACHORRO: *Latindo*</p>";
  }
}  
?>