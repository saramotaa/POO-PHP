<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body> 
    <pre>
    <?php
      require_once 'Caneta.php';

      $c1 = new Caneta();
      //$c1->modelo = "BIC";(Mudar utilizando o acesso diretamente ao atributo, caso seja PUBLICO)
      $c1->setModelo("BIC");
      $c1->setPonta(0.5);

      print_r($c1);
      print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}.";
    ?>
    <pre>
  </body>
</html>