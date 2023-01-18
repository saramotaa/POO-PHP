<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
  //Atributos
  private $volume;
  private $ligado;
  private $tocando;

  //Métodos
  public function ligar(){
    $this->setLigado(true);
  }
  public function desligar(){
    $this->setLigado(false);
    $this->setTocando(false);
  }
  public function abrirMenu(){
    echo "<br>-------- MENU --------";
    echo "<br>Está ligado? " . ($this->getLigado() ?"SIM":"NÃO");
    echo "<br>Está tocando? " . ($this->getTocando() ?"SIM":"NÃO");
    echo "<br>Volume: " . $this->getVolume() . "  ";
    for ($i=0; $i <= $this->getVolume(); $i+=10) { 
      echo"|";
    }
    echo "<br>";
  }
  public function fecharMenu(){
    echo "<p>Fechando menu...</p>";
  }
  public function maisVolume(){
    if ($this->getLigado() == true) {
      $this->setVolume($this->getVolume() + 10);
    }
  }
  public function menosVolume(){
    if ($this->getLigado(true)) {
      $this->setVolume($this->getVolume() - 10);
    }
  }
  public function ligarMudo(){
    if ($this->getLigado(true) && $this->getVolume() > 0) {
      $this->setVolume(0);
    }
  }
  public function desligarMudo(){
    if ($this->getLigado() && $this->getVolume() == 0) {
      $this->setVolume(50);
    }
  }
  public function play(){
    if ($this->getLigado(true) && !($this->getTocando())) {
      $this->setTocando(true);
    }
  }
  public function pause(){
    if ($this->getLigado(true) && $this->getTocando()) {
      $this->setTocando(false);
    }
  }

  //Métodos Especiais
  public function __construct(){
    $this->setVolume(50);
    $this->setLigado(false);
    $this->setTocando(false);
  }

  //Normalmente os Getters e Setters são públicos, mas nesta explicação eles serão privados.
  private function getVolume(){
    return $this->volume;
  }
  private function setVolume($volume){
    $this->volume = $volume;
  }

  private function getLigado(){
    return $this->ligado;
  }
  private function setLigado($ligado){
    $this->ligado = $ligado;
  }
  
  private function getTocando(){
    return $this->tocando;
  }
  private function setTocando($tocando){
    $this->tocando = $tocando;
  }
}
?>