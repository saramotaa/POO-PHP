<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>UFC</title>
  </head>
  <body> 
    <h1>ARENA DE LUTA</h1>
    <?php
      require_once 'Lutador.php';
      require_once 'Luta.php';
      $l = array_fill(1,6, '');
      $l[1] = new Lutador("Pretty Boy","França", 31 , 1.75 , 68.9 , 11 , 3 , 1);
      $l[2] = new Lutador("Putscript", "Brasil", 29 , 1.68 , 57.8 , 14 , 2 , 3);
      $l[3] = new Lutador("Snapshadow", "EUA" , 35 , 1.65 , 80.9 , 12 , 2 , 1);
      $l[4] = new Lutador ("Dead Code", "Austrália", 28 , 1.93 , 81.6 , 13 , 0 , 2);
      $l[5] = new Lutador ("UFOCobol", "Brasil", 37 , 1.70 , 119.3 , 5 , 4 , 3);
      $l[6] = new Lutador ("Nerdaart", "EUA", 30 , 1.81 , 105.7 , 12 , 2 , 4);

      $UEC01 = new Luta();
      $UEC01->regras();
      $UEC01->marcarLuta($l[1], $l[1]);
      $UEC01->lutar();

      $l[1]->status();
      $l[2]->status();
    ?>
  </body>
</html>