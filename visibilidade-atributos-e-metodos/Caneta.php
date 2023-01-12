<?php

// + Public: A classe atual e todas as outras classes
// - Private: Somente a classe atuala tem acesso
// # Protected: Classe atual e todas as duas subclasses

class Caneta {
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

  public function rabiscar() {
    if ($this->tampada == true) {
      echo "<p>ERRO! Não posso rabiscar!</p>";
    } else {
      echo "<p>Estou rabiscando...</p>";
    }
  }

  public function tampar() {
    $this->tampada = true;
  }

  public function destampar() {
    $this->tampada = false;
  }
}

?>