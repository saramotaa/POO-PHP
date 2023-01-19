<?php

require_once 'Lutador.php';

// REGRAS
// 1. Só pode ser marcada entre lutadores da mesma categoria.
// 2. Desafiado e desafiante devem ser lutadores diferentes.
// 3. Só pode acontecer se a luta estiver aprovada.
// 4. Só pode ter como resultado a vitória entre um dos jogadores ou o empate.

class Luta{
  private $desafiado; //class Lutador (instância de lutador)
  private $desafiante; //class Lutador (instância de lutador)
  private $rounds; //int
  private $aprovada; //logico

  public function marcarLuta($l1, $l2){
    if ($l1->getCategoria() === $l2->getCategoria() & $l1 <> $l2){
      $this->aprovada = true;
      $this->desafiado = $l1;
      $this->desafiante = $l2;
    } else {
      echo "<p>NOSSA! Esta luta não pode acontecer pelo motivo: ";
      $this->aprovada = false;
      $this->desafiado = null;
      $this->desafiante = null;
      if ($l1->getCategoria() <> $l2->getCategoria()) {
        echo "Lutadores com categorias diferentes.";
      } elseif ($l1 = $l2) {
        echo "É necessário que haja mais de um lutador.";
      }
    }
  }

  public function regras(){
    echo "<br>------- REGRAS -------";
    echo "<br>1. A luta só pode ser marcada entre lutadores da mesma categoria.";
    echo "<br>2. Desafiado e desafiante devem ser lutadores diferentes.";
    echo "<br>3. A luta só pode acontecer se a luta estiver aprovada.";
    echo "<br>4. A luta só pode ter como resultado a vitória entre um dos jogadores ou o empate.";
  }

  public function lutar(){
    if ($this->aprovada) {
      $this->desafiado->apresentar();
      $this->desafiante->apresentar();
      $vencedor = rand(0,2);
      switch ($vencedor) {
        case 0: //Empate
          echo "<p>Empate!</p>";
          $this->desafiado->empatarLuta();
          $this->desafiante->empatarLuta();
          break;
        case 1: //Desafiado vence
          echo "<p>O desafiado " . $this->getDesafiado()->getNome() . " venceu!";
          $this->desafiado->ganharLuta();
          $this->desafiante->perderLuta();
          break;
        case 2: //Desafiante vence
          echo "<p>O desafiante " . $this->getDesafiante()->getNome() . " venceu!";
          $this->desafiado->perderLuta();
          $this->desafiante->ganharLuta();
          break;
      }
    } else {
      "<p>Luta não pode acontecer: A luta não foi aprovada.</p>";
    }
  }


  public function __construct(){
    
  }


  public function getDesafiado()
  {
  return $this->desafiado;
  }

  public function setDesafiado($dd)
  {
  $this->desafiado = $dd;
  return $this;
  }

  public function getDesafiante()
  {
  return $this->desafiante;
  }

  public function setDesafiante($dt)
  {
  $this->desafiante = $dt;
  return $this;
  }

  public function getRounds()
  {
  return $this->rounds;
  }

  public function setRounds($rd)
  {
  $this->rounds = $rd;
  return $this;
  }

  public function getAprovada()
  {
  return $this->aprovada;
  }

  public function setAprovada($ap)
  {
  $this->aprovada = $ap;
  return $this;
  }
}
?>