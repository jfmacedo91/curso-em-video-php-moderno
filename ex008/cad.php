<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Conversor de moedas v1.0</title>
</head>
<body>
  <header>
    <h1>Conversor de moedas v1.0</h1>
  </header>
  <main>
    <div class="result">
      <?php
        $reais = $_GET['number'] ?? 0;
        $dollars = $reais / 5.2886;
        $reais = number_format($reais, 2, ',', '.');
        $dollars = number_format($dollars, 2, ',', '.');
        echo "<p>Seus R$ $reais equivalem a <strong>US$ $dollars</strong></p>";
        echo "<p>*<strong>Cotação fixa de R$ 5,29</strong> informada diretamente no código.</p>";
      ?>
      <a class="btn" href="index.html"><?= "\u{2B05}" ?> Voltar</a>
    </div>
  </main>
</body>
</html>