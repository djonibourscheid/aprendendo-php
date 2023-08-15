<?php

// include 'funcoes.php';
require_once __DIR__ . '/../funcoes.php';

$contasCorrentes = [
  '000.000.000-00' => [
    'titular' => 'José',
    'saldo' => 10,
  ],
  '111.111.111-11' => [
    'titular' => 'Djoni',
    'saldo' => 100,
  ]
];


// Sacar
$contasCorrentes['111.111.111-11'] = sacar($contasCorrentes['111.111.111-11'], 50);
$contasCorrentes['000.000.000-00'] = sacar($contasCorrentes['000.000.000-00'], 50);

echo PHP_EOL;

// Depositar
$contasCorrentes['111.111.111-11'] = depositar($contasCorrentes['111.111.111-11'], 5);
$contasCorrentes['000.000.000-00'] = depositar($contasCorrentes['000.000.000-00'], 50);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco na Web</title>
</head>
<body>
  <h1>Contas correntes</h1>

  <dl>
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
          <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
    <?php } ?>
  </dl>
</body>
</html>