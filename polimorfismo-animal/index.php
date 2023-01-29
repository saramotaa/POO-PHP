<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Polimorfismo</title>
  </head>
  <body> 
    <h1>Polimorfismo: SOBREPOSIÇÃO</h1>
    <pre>
    <?php
      require_once 'classes/animal.php';
      require_once 'classes/ave.php';
      require_once 'classes/mamifero.php';
      require_once 'classes/peixe.php';
      require_once 'classes/reptil.php';
      require_once 'classes/arara.php';
      require_once 'classes/cachorro.php';
      require_once 'classes/canguru.php';
      require_once 'classes/cobra.php';
      require_once 'classes/goldfish.php';
      require_once 'classes/tartaruga.php';

      $m1 = new Mamifero();
      $r1 = new Reptil();
      $p1 = new Peixe();
      $a1 = new Ave();
      $c = new Canguru();
      $k = new Cachorro();
      $co = new Cobra();
      $t = new Tartaruga();
      $g = new Goldfish();
      $a = new Arara();

      $k->setPeso(10);
      $k->setIdade(5);
      $k->setMembros(4);
      $k->setcorPelo("caramelo");
      $k->locomover();
      $k->alimentar();
      $k->emitirSom();
      $k->abanarRabo();

      // $m1->setPeso(5.70);
      // $m1->setIdade(8);
      // $m1->setMembros(4);
      // $m1->setcorPelo("Preto");
      // $m1->locomover();
      // $m1->alimentar();
      // $m1->emitirSom();
      
      print_r($c);
      print_r($k);
      print_r($co);
      print_r($t);
      print_r($g);
      print_r($a);
    ?>
    </pre>
  </body>
</html>