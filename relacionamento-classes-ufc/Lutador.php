<?php
require_once 'Controlador.php';
class Lutador implements Controlador {
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria; //Peso leve, peso médio, peso pesado.
  private $vitorias;
  private $derrotas;
  private $empates;

  public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->vitorias = $vi;
    $this->derrotas = $de;
    $this->empates = $em;
  }


  public function apresentar(){
    echo "<p>---------------------------</p>";
    echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
    echo " veio diretamente de " . $this->getNacionalidade();
    echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "kg e ";
    echo $this->getAltura() . "m de altura.";
    if ($this->getVitorias() === 1) {
      echo "<br>Ele tem " . $this->getVitorias() . " vitória, ";
    } else {
      echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
    }
    if ($this->getDerrotas() === 1) {
      echo $this->getDerrotas() . " derrota e ";
    } else {
      echo $this->getDerrotas() . " derrotas e ";
    }
    if ($this->getEmpates() === 1) {
      echo $this->getEmpates() . " empate!";
    } else {
      echo $this->getEmpates() . " empates!";
    }

  }
  public function status(){
    echo "<p>---------------------------</p>";
    if (($this->getVitorias() < 0) || ($this->getDerrotas() < 0) || ($this->getEmpates() < 0)) {
      echo "ERRO! Números menores que zero não são permitidos.";
    } else {
      echo "<p>Status: " . $this->getNome() . " é um peso " . $this->getCategoria();
      if ($this->getVitorias() === 1) {
        echo " e já ganhou " . $this->getVitorias() . " vez, ";
      } elseif ($this->getVitorias() === 0) {
        echo ", não ganhou nenhuma vez, ";
      } else {
        echo " e já ganhou " . $this->getVitorias() . " vezes, ";
      }
      if ($this->getDerrotas() === 1) {
        echo "perdeu " . $this->getDerrotas() . " vez e ";
      } elseif ($this->getDerrotas() === 0) {
        echo "não perdeu nenhuma vez e ";
      } else {
        echo "perdeu " . $this->getDerrotas() . " vezes e ";
      }
      if ($this->getEmpates() === 1) {
        echo "empatou " . $this->getEmpates() . " vez.";
      } elseif ($this->getEmpates() == 0) {
        echo "não empatou nenhuma vez.";
      } else {
        echo "empatou " . $this->getEmpates() . " vezes.";
      }
    }
  }

  public function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
  }

  public function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);
  }
 
  public function empatarLuta(){
    $this->setEmpates($this->getEmpates() + 1);
  }



  public function getNome(){
    return $this->nome;
  }
  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getNacionalidade(){
    return $this->nacionalidade;
  }
  public function setNacionalidade($nacionalidade){
    $this->nacionalidade = $nacionalidade;
  }

  public function getIdade(){
    return $this->idade;
  }
  public function setIdade($idade){
    $this->idade = $idade;
  }

  public function getAltura(){
    return $this->altura;
  }
  public function setAltura($altura){
    $this->altura = $altura;
  }

  public function getPeso(){
    return $this->peso;
  }
  public function setPeso($peso){
    $this->peso = $peso;
    $this->setCategoria();
  }

  public function getCategoria(){
    return $this->categoria;
  }
  private function setCategoria(){
    if ($this->peso < 52.2) {
      $this->categoria = "Inválido";
    } elseif ($this->peso <= 70.3) {
      $this->categoria = "Leve";
    } elseif ($this->peso <= 83.9) {
      $this->categoria = "Médio";
    } elseif ($this->peso <= 120.2) {
      $this->categoria = "Pesado";
    } else {
      $this->categoria = "Inválido";
    }
  }

  public function getVitorias(){
    return $this->vitorias;
  }
  public function setVitorias($vitorias){
    $this->vitorias = $vitorias;
  }

  public function getDerrotas(){
    return $this->derrotas;
  }
  public function setDerrotas($derrotas){
    $this->derrotas = $derrotas;
  }

  public function getEmpates(){
    return $this->empates;
  }
  public function setEmpates($empates){
    $this->empates = $empates;
  }

}
?>