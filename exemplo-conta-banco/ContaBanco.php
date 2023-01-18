<?php

class ContaBanco{
  //Atributos
  public $numConta; //inteiro
  protected $Tipo; //cc(Conta Corrente + recebe 50 reais) ou cp(Conta Poupança + recebe 150 reais)
  private $Dono; //caractere
  private $Saldo; //real 
  private $Status; //lógico (Conta aberta ou fechada)


  //Métodos
  public function abrirConta($Tipo){
    $this->setTipo($Tipo);
    $this->setStatus(true);
    if ($Tipo == "CC"){
      $this->setSaldo(50);
    } elseif ($Tipo == "CP"){
      $this->setSaldo(150);
    }
  }

  public function fecharConta(){
    if ($this->getSaldo() > 0) {
      echo "<p>Não é possível fechar conta: Conta com dinheiro.</p>";
    } elseif ($this->getSaldo() < 0){
      echo "<p>Não é possível fechar conta: Conta em débito.</p>";
    } else {
      $this->setStatus(false);
      echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
    }
  }

  public function depositar($valor){
    if ($this->getStatus() == true){
      $this->setSaldo($this->getSaldo() + $valor);
      //$this->saldo = $this->saldo + v;
      echo "<p>Depósito de R$$valor autorizado na conta de {$this->getDono()}.</p>";
    } else {
      echo "<p>Não é possível depositar: Conta fechada.</p>";
    }
  }

  public function sacar($valor){
    if ($this->getStatus() == true) {
      if ($this->getSaldo() >= $valor) {
        $this->setSaldo($this->getSaldo() - $valor); 
        echo "<p>Saque de R$$valor autorizado na conta de {$this->getDono()}.</p>";
      } else {
        echo "<p>Não é possível sacar: Saldo insuficiente.</p>";
      }
    } else {
      echo "<p>Não é possível sacar: Conta fechada.</p>";
    }
  }

  public function pagarMensal(){
    if ($this->getTipo() == "CC") {
      $valor = 12;
    } elseif ($this->getTipo() == "CP") {
      $valor = 20;
    }

    if ($this->getStatus() == true) {
      $this->setSaldo($this->getSaldo() - $valor);
      echo "<p>Mensalidade de R$$valor debitada da conta de {$this->getDono()}.</p>";
    } else {
      echo "<p>Não é possível cobrar: Saldo insuficiente.</p>";
    }
  }


  //Métodos Especiais
  public function __construct(){
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "<p>Conta criada com sucesso!</p>";
  }


  
  public function getnumConta(){
    return $this->numConta;
  }
  public function setnumConta($numConta){
    $this->numConta = $numConta;
  }

  public function getTipo(){
    return $this->Tipo;
  }
  public function setTipo($Tipo){
    $this->Tipo = $Tipo;
  }

  public function getDono(){
    return $this->Dono;
  }
  public function setDono($Dono){
    $this->Dono = $Dono;
  }

  public function getSaldo(){
    return $this->Saldo;
  }
  public function setSaldo($Saldo){
    $this->Saldo = $Saldo;
  }

  public function getStatus(){
    return $this->Status;
  }
  public function setStatus($Status){
    $this->Status = $Status;
  }

}
?>