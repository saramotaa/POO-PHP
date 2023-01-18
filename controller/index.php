<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Controle Remoto</title>
  </head>
  <body> 
    <pre>

    <h1>Projeto do Controle Remoto</h1>
    <?php
      require_once 'ControleRemoto.php';

      $c1 = new ControleRemoto();
      $c1->ligar();
      $c1->maisVolume();
      $c1->maisVolume();
      $c1->menosVolume();
      $c1->play();
      $c1->abrirMenu();
      $c1->fecharMenu(); //Enquanto o menu estiver fechado, as alterações não aparecerão no menu, elas aperecerão apenas se ele for aberto novamente.
      $c1->maisVolume();
      $c1->maisVolume();
      $c1->abrirMenu();
      $c1->ligarMudo();
      $c1->desligarMudo();
      $c1->desligar();

      print_r($c1)
      

    ?>
    </pre>
  </body>
</html>