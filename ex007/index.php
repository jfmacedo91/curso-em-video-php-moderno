<?php
  $number = rand(0, 100);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Números aleatórios</title>
</head>
<body>
  <h1>Trabalhando com números aleatórios</h1>
  <div class="result">
    <p>Geranum um número aleatório entre 0 e 100...</p>
    <p>O valor gerado foi <strong><?= $number; ?></strong></p>
    <a href="index.php" class="btn"><?= "\u{1F503}" ?> Gerar outro</a>
  </div>
</body>
</html>