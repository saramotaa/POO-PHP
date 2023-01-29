<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Herança</title>
  </head>
  <body> 
    <h1>PESSOAS E FUNÇÕES</h1>
    <pre>
    <?php
      require_once 'aluno.php';
      require_once 'funcionario.php';
      require_once 'professor.php';
      require_once 'pessoa.php'; //$no, $id, $se
      require_once 'visitante.php';
      require_once 'bolsista.php';
      require_once 'tecnico.php';

      $a1 = new Aluno("Sara", 20, "F");
      $p1 = new Professor();
      $f1 = new Funcionario();
      $v1 = new Visitante("Gabriel", 23, "M");
      $b1 = new Bolsista(900);
      $t1 = new Tecnico(68465174);

      $v1->fazerAniv();
      
      $a1->setNome("Sara");
      $a1->setIdade(20);
      $a1->setSexo("F");
      $a1->setMatr("1249");
      $a1->setCurso("Ciência da Computação");
      $a1->pagarMensal();

      $p1->setNome("Pedro");
      $p1->setIdade(24);
      $p1->setSexo("M");
      $p1->setEspecialidade("Programação Orientada a Objetos");
      $p1->receberAum(520);

      $f1->setNome("Mariana");
      $f1->setIdade(28);
      $f1->setSexo("F");
      $f1->contratado("Advogada");
      $f1->mudarTrabalho("Profissional da beleza");
      $f1->demitido();
      $f1->mudarTrabalho("Profissional da beleza");

      $b1->setNome("Fernanda");
      $b1->setIdade(27);
      $b1->setSexo("F");
      $b1->setCurso("Sistemas de Informação");
      $b1->setMatr(1478);
      $b1->renovarBolsa(90); //porcentagem
      $b1->pagarMensal();

      $t1->setNome("Enzo");
      $t1->setIdade(16);
      $t1->setSexo("M");
      $t1->setCurso("Computação");
      $t1->setMatr(1367);
      $t1->pagarMensal(450);
      $t1->praticar();

      // print_r($v1);
      // print_r($a1);
      // print_r($p1);
      // print_r($f1);
      // print_r($b1);
      print_r($t1);
    ?>
    </pre>
  </body>
</html>