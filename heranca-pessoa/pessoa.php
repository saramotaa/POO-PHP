<?php

abstract class Pessoa{
  private $nome;
  private $idade;
  private $sexo;

   public final function fazerAniv(){
    $this->idade ++;
    echo "<p>- Feliz aniversário, <strong>" . $this->getNome() . "</strong>! Agora você está completando <strong>" . $this->getIdade() . "</strong> anos!</p>";
  }

  public function __construct($no, $id, $se){
    $this->setNome($no);
    $this->setIdade($id);
    $this->setSexo($se);
  }

  public function getNome(){
  return $this->nome;
  }
  public function setNome($nome){
  $this->nome = $nome;
  return $this;
  }

  public function getIdade(){
  return $this->idade;
  }
  public function setIdade($idade){
  $this->idade = $idade;
  return $this;
  }

  public function getSexo(){
  return $this->sexo;
  }
  public function setSexo($sexo){
  $this->sexo = $sexo;
  return $this;
  }
}
?>