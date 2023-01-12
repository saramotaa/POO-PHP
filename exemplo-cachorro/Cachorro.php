<?php

class Cachorro {
  var $nome;
  var $sexo;
  var $pelagem;
  var $porte;
  var $raça; 
  var $idade; 
  var $bravo; //bravo, morde) ou false(manso, não morde)
  var $comunicativo; //true(agitado, late) ou false(calmo, não late)

  function Latir(){
    if ($this->comunicativo == true) {
      echo "<p>O cachorro latiu para você.</p>";
    } else {
      echo "<p>O cachorro não latiu para você.</p>";
    }
  }

  function Morder(){
    if ($this->bravo == true) {
      echo "<p>O cachorro te mordeu.</p>";
    } else {
      echo "<p>O cachorro recuou.</p>";
    }
  }

  function Adestrar(){
    $this->bravo = false;
    $this->comunicativo = false;
  }

}



?>