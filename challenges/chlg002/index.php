<?php
  $min = 0;
  $max = 100;
  $number = mt_rand(0, 100);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Números aleatórios</title>
</head>
<body>
  <h1>Trabalhando com números aleatórios</h1>
  <div class="result">
    <p>Geranum um número aleatório entre <?= $min; ?> e <?= $max; ?>...</p>
    <p>O valor gerado foi <strong><?= $number; ?></strong></p>
    <button class="btn" onclick="javascript:document.location.reload()">
      <?= "\u{1F503}" ?> Gerar outro
    </button>
  </div>
</body>
</html>