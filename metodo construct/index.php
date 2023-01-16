<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <pre>
    <?php
      require_once 'Caneta.php';

      $c1 = new Caneta("BIC", "Azul", 0.5);
      $c2 = new Caneta("BIC", "Vermelha", 0.7);
      $c3 = new Caneta("Tilibra", "Azul", 1.0);

      print_r($c1);
      print_r($c2);
      print_r($c3);
    ?>
    <pre>
  </body>
</html>