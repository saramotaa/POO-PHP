<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body> 
    <pre>
    <?php
      require_once 'ContaBanco.php';

      $p1 = new ContaBanco(); //Marcos
      $p2 = new ContaBanco(); //Marcela


      $p1->abrirConta("CC");
      $p1->setDono("Marcos");
      $p1->setnumConta(1111);

      $p2->abrirConta("CP");
      $p2->setDono("Marcela");
      $p2->setnumConta(2222);

      $p1->depositar(300);
      $p2->depositar(500);

      $p2->sacar(100);

      $p1->pagarMensal();
      $p2->pagarMensal();
      
      $p2->sacar(600);

      $p1->sacar(338);
      $p2->sacar(530);

      $p1->fecharConta();
      $p2->fecharConta();

      print_r($p1);
      print_r($p2);
    ?>
    </pre>
  </body>
</html>