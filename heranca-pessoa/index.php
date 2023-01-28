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

      $p1 = new Pessoa("Gabriel", 23, "M");
      $p2 = new Aluno();
      $p3 = new Professor();
      $p4 = new Funcionario();

      $p1->fazerAniv();
      
      $p2->setNome("Sara");
      $p2->setIdade(20);
      $p2->setSexo("F");
      $p2->setMatr("1249");
      $p2->setCurso("Ciência da Computação");

      $p3->setNome("Pedro");
      $p3->setIdade(24);
      $p3->setSexo("M");
      $p3->setEspecialidade("Programação Orientada a Objetos");
      $p3->receberAum(520);

      $p4->setNome("Mariana");
      $p4->setIdade(28);
      $p4->setSexo("F");
      $p4->contratado("Advogada");
      $p4->mudarTrabalho("Profissional da beleza");
      $p4->demitido();
      $p4->mudarTrabalho("Profissional da beleza");

      print_r($p1);
      print_r($p2);
      print_r($p3);
      print_r($p4);
    ?>
    </pre>
  </body>
</html>