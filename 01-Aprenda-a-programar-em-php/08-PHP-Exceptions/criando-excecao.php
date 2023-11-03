<?php

function funcao1()
{
  echo 'Entrei na função 1' . PHP_EOL;

  try {
    funcao2();
  } catch (Throwable $problema) { // pegando qualquer problema sendo error ou exception
    echo '---------' . PHP_EOL;
    echo $problema->getMessage() . PHP_EOL;
    echo 'Linha de erro ' . $problema->getLine() . PHP_EOL;
    echo $problema->getTraceAsString() . PHP_EOL;

    echo '-> Na função 1, eu resolvi um erro na função 2' . PHP_EOL;
    echo '---------' . PHP_EOL;
  }

  echo 'Saindo da função 1' . PHP_EOL;
}

/**
 * @throws Exception
 */
function funcao2()
{
  echo 'Entrei na função 2' . PHP_EOL;

  // lançando excecao
  throw new RuntimeException("Esta é a mensagem da exceção");

  // Código nunca executado
  echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
