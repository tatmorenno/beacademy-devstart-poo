<?php

ini_set('display_errors', 1);
include 'Produto.php';

$p1 = new Produto('Notebook', 5000);
// $p1->setNome('Notebook');
// $p1->setValor(5000);

$p2 = new Produto('Fone de ouvido', 100);
// $p2->setNome('Fone de ouvido');
// $p2->setValor(100);

$p3 = new Produto('Teclado', 12);
// $p3->setNome('Teclado');


var_dump($p1);
var_dump($p2);
var_dump($p3);