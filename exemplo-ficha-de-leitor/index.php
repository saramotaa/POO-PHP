<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Leitor e Aniversário</title>
  </head>
  <body> 
    <h1>FICHA DE LEITOR</h1>
    <pre>
    <?php
      require_once 'Pessoa.php'; // ($n, $i, $s)
      require_once 'Livro.php'; //($ti, $au, $totP, $le)

      $p = array_fill(1,10,'');
      $p[1] = new Pessoa("Sara",20,"F");
      $p[2] = new Pessoa("João",33,"M");

      $l = array_fill(1,10,'');
      $l[1] = new Livro("Voar","Vinícios Lemos",215,$p[1]);
      $l[2] = new Livro("Sentimentos vazios", "Marcela Souza", 310, $p[1]);
      $l[3] = new Livro("Matemática básica", "Ana Paula Silva",211, $p[2]);

      $l[1]->folhear(210);
      $l[1]->voltarPag();
      $l[1]->detalhes();
    ?>
    </pre>
  </body>
</html>