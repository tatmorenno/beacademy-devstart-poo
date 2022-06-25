 <?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';
include 'Disciplina.php';

$a1 = New Aluno();
$a1->nome = 'Tatiana';
$a1->cpf = '123.123.123-12';

$cursoPHP = New Curso();
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->descricao = 'Aprender o básico e o intermediário do PHP';
$cursoPHP->cargaHoraria = 88;

 $aluno = [
  'nome' => 'Tatiana',
  'cpf' => '123.123.123-12'
 ];

 $aluno = [
  'Nome' => 'Tatiana',
  'cpf' => '123.123.123-12'
 ];

 echo "<h1>Aluno:{$a1->cpf}</h1>";