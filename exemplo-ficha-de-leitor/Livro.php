<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;


  public function __construct($ti, $au, $totP, $le){
    $this->titulo = $ti;
    $this->autor = $au;
    $this->totPaginas = $totP;
    $this->aberto = false;
    $this->pagAtual = 0;
    $this->leitor = $le;
  }



  public function detalhes(){
    echo "<p>------ DETALHES ------";
    echo "<br>Título: " . $this->getTitulo() . " escrito por " . $this->getAutor();
    echo "<br>Total de páginas: " . $this->totPaginas . " atual " . $this->pagAtual;
    echo "<br>Sendo lido por " . $this->leitor->getNome();
    echo "<br>----------------------<p>";
  }

  public function abrir(){
    $this->aberto = true;
  }
  public function fechar(){
    $this->aberto = false;
  }
  public function folhear($p){
    if ($p>$this->totPaginas) {
      $this->pagAtual = 0;
    } else {
      $this->pagAtual = $p;
    }
  }

  public function avancarPag(){
    $this->pagAtual ++;
  }

  public function voltarPag(){
    $this->pagAtual --;
  }


  public function getTitulo()
  {
  return $this->titulo;
  }
  public function setTitulo($titulo)
  {
  $this->titulo = $titulo;
  return $this;
  }

  public function getAutor()
  {
  return $this->autor;
  }
  public function setAutor($autor)
  {
  $this->autor = $autor;
  return $this;
  }

  public function getTotPaginas()
  {
  return $this->totPaginas;
  }
  public function setTotPaginas($totPaginas)
  {
  $this->totPaginas = $totPaginas;
  return $this;
  }

  public function getPagAtual() {  
    return $this->pagAtual;
  }

  public function setPagAtual($pagAtual)
  {
  $this->pagAtual = $pagAtual;
  return $this;
  }

  public function getAberto()
  {
  return $this->aberto;
  }
  public function setAberto($aberto)
  {
  $this->aberto = $aberto;
  return $this;
  }

  public function getLeitor()
  {
  return $this->leitor;
  }
  public function setLeitor($leitor)
  {
  $this->leitor = $leitor;
  return $this;
  }
}
?>