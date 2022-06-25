<?php

ini_set('display_errors', 1);
include 'Produto.php';

$p1 = new Produto();
$p1->alterarNome('Notebook');
$p1->alterarValor(5000);

$p2 = new Produto();
$p2->alterarNome('Fone de ouvido');
$p2->alterarValor(100);

var_dump($p1);
var_dump($p2);