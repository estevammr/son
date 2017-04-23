<?php

$alunos = [];
$alunos[1] = "Joao";
$alunos[2] = "Beltrano";
$alunos[3] = "Ciclano";

foreach ($alunos as $key => $aluno) {
  $string = $key . " " . $aluno . ", ";
  echo $string;
}
