<?php

class MinhaExcecao extends Exception
{
  public function exibeDjoni()
  {
    echo "Djoni";
  }
}


try {
  throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
  $e->exibeDjoni();
}
