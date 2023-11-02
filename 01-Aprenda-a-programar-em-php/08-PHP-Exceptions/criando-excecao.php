<?php

function somar($a, $b)
{
  $soma = $a + $b;
  echo $soma;
}



$excecao = new Exception;
// lançando excecao
throw ($excecao);

// Código nunca executado
somar(1, 2);