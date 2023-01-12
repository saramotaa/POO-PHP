<?php

//Avaliando cachorros para adestrar
//O animal é de um jeito sem antes de ser adestrado e dependendo do seu comportamento pode te trazer algumas consequências
//Quando a function Adestrar é ativada o animal se torna adestrado

echo "<p>Você chega perto do cachorro.</p>";

require_once 'Cachorro.php';

$c1 = new Cachorro;
$c1->nome = "Max";
$c1->sexo = "M";
$c1->pelagem = "preta";
$c1->porte = "médio";
$c1->raça = "SRD";
$c1->idade = 12;
$c1->bravo = false;
$c1->comunicativo = true;
// $c1->Adestrar();
print_r($c1);
$c1->Latir();
$c1->Morder();
echo "<br/>";


$c2 = new Cachorro;
$c2->nome = "Bibi";
$c2->sexo = "F";
$c2->pelagem = "branca";
$c2->porte = "pequeno";
$c2->raça = "pinsher";
$c2->idade = 4;
$c2->bravo = true;
$c2->comunicativo = true;
// $c2->Adestrar();
// print_r($c2);
// $c2->Latir();
// $c2->Morder();
// echo "<br/>";


$c3 = new Cachorro;
$c3->nome = "Kiko";
$c3->sexo = "M";
$c3->pelagem = "grisalha";
$c3->porte = "médio";
$c3->raça = "poodle";
$c3->idade = 14;
$c3->bravo = false;
$c3->comunicativo = false;
// $c3->Adestrar();
// print_r($c3);
// $c3->Latir();
// $c3->Morder();
// echo "<br/>";


$c4 = new Cachorro;
$c4->nome = "Sol";
$c4->sexo = "F";
$c4->pelagem = "marrom";
$c4->porte = "grande";
$c4->raça = "chow chow";
$c4->idade = 6;
$c4->bravo = true;
$c4->comunicativo = false;
// $c4->Adestrar();
// print_r($c4);
// $c4->Latir();
// $c4->Morder();
// echo "<br/>";

?>