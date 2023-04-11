<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
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
        $integerPart = (int) $number;
        $fractionalPart = $number - $integerPart;
      ?>
      <p>Analisando o número <strong><?= number_format($number, 3, ',', '.'); ?></strong> informado pelo usuário:</p>
      <ul>
        <li>A parte inteira do número é <strong><?= number_format($integerPart, 0, ',', '.'); ?></strong></li>
        <li>A parte fracionária do número é <strong><?= number_format($fractionalPart, 3, ',', '.'); ?></strong></li>
      </ul>
      <button class="btn" onclick="javascript:history.go(-1)">
        <?= "\u{2B05}" ?> Voltar
      </button>
    </div>
  </main>
</body>
</html>