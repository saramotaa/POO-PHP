<?php

// + Public: A classe atual e todas as outras classes
// - Private: Somente a classe atuala tem acesso
// # Protected: Classe atual e todas as duas subclasses

class Caneta {
  private $modelo;
  private $cor;
  private $ponta;
  private $tampada;

  function __construct($m, $c, $p){
    $this->modelo = $m;
    //$this->setModelo($m);
    $this->cor = $c;
    $this->ponta = $p;
    $this->tampar();
  }

  function tampar(){
    $this->tampada = true;
  }

  function getModelo(){
    return $this->modelo;
  }
  function setModelo($m){
    $this->modelo = $m; 
  }


  function getPonta(){
    return $this->ponta;
  }
  function setPonta($p){
    $this->ponta = $p;
  }

}

?>