<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Caixa eletrônico</title>
</head>
<body>
  <?php
    $value = $_GET["value"] ?? 0;
    $hundred = intdiv($value, 100);
    $fifty = intdiv($value % 100, 50);
    $ten = intdiv($value - ($hundred * 100 + $fifty * 50), 10);
    $five = intdiv($value - ($hundred * 100 + $fifty * 50 + $ten * 10), 5);
    $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
  ?>
  <main>
    <h1>Caixa eletrônico</h1>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="GET">
      <label for="value">Qual valor você deseja sacar? (R$)*</label>
      <input type="number" step="5" name="value" id="value" value="<?= $value; ?>">
      <span>*Notas disponíveis: R$ 100, R$ 50, R$ 10, R$ 5</span>
      <input type="submit" value="Sacar" class="btn">
    </form>
  </main>
  <div class="result">
    <h2>Saque de <?= numfmt_format_currency($pattern, $value, "BRL"); ?> realizado</h2>
    <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
    <ul>
      <li><img src="./images/100-reais.jpg"> x<?= $hundred; ?></li>
      <li><img src="./images/50-reais.jpg"> x<?= $fifty; ?></li>
      <li><img src="./images/10-reais.jpg"> x<?= $ten; ?></li>
      <li><img src="./images/5-reais.jpg"> x<?= $five; ?></li>
    </ul>
  </div>
</body>
</html>