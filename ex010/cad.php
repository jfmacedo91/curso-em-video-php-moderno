<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Analisador de número real</title>
</head>
<body>
  <header>
    <h1>Analisador de número real</h1>
  </header>
  <main>
    <div class="result">
      <?php
        $number = $_GET['number'];
        $number = number_format($number, 3, '.', '');
        [$integerPart, $fractionalPart]= explode('.', $number);
        $formattedNumber = number_format($number, 3, ',', '.');
        $formattedIntegerPart = number_format($integerPart, 0, ',', '.');
        $formattedFractionalPart = number_format($fractionalPart / 1000, 3, ',', '.');
      ?>
      <p>Analisando o número <strong><?= $formattedNumber; ?></strong> informado pelo usuário:</p>
      <ul>
        <li>A parte inteira do número é <strong><?= $formattedIntegerPart; ?></strong></li>
        <li>A parte fracionária do número é <strong><?= $formattedFractionalPart; ?></strong></li>
      </ul>
      <a class="btn" href="index.html"><?= "\u{2B05}" ?> Voltar</a>
    </div>
  </main>
</body>
</html>