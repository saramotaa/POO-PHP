<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Polimorfismo</title>
  </head>
  <body> 
    <h1>Polimorfismo: SOBRECARGA</h1>
    <pre>
    <?php
      echo "<p>O PHP não suporta polimorfismo em sobrecarga. A solução para isso seria criar várias funções com os nomes diferentes.</p>";

      require_once 'class/lobo.php';
      require_once 'class/cachorro.php';
      require_once 'class/mamifero.php';
      require_once 'class/animal.php';

      $m = new Mamifero();
      $l = new Lobo();
      $c = new Cachorro();

      echo "<p>----- Emitindo Sons -----</p>";
      $m->emitirSom();
      $l->emitirSom();
      $c->emitirSom();
      echo "<p>--------------------------</p>";

      // $c->reagirFrase("Olá");
      // $c->reagirFrase("Vai apanhar");
      // $c->reagirHora(11);
      // $c->reagirHora(17);
      // $c->reagirHora(20);
      // $c->reagirDono(true);
      // $c->reagirDono(false);
      $c->reagirIdadePeso(3,8);
      $c->reagirIdadePeso(7,12);
      $c->reagirIdadePeso(3,12);
      $c->reagirIdadePeso(7,8);

      
    ?>
    </pre>
  </body>
</html>