<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Reajustador de preços</title>
</head>
<body>
  <?php
    $price = $_GET["price"] ?? 0;
    $percentage = $_GET["percentage"] ?? 0;
    $readjustedPrice = $price * ($percentage / 100 + 1);
    $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
  ?>
  <main>
    <h1>Reajustador de preços</h1>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="GET">
      <label for="price">Preço do produto (R$)</label>
      <input type="number" step="0.01" name="price" id="price" value="<?= $price; ?>">
      <label for="percentage" class="percentage">Qual será o percentual de reajuste? (<strong><?= $percentage; ?>%</strong>)</label>
      <input type="range" name="percentage" id="percentage" min="0" max="100" step="1" value="<?= $percentage; ?>" oninput="changePercentage(event)">
      <input type="submit" value="Reajustar" class="btn">
    </form>
  </main>
  <div class="result">
    <h2>Resultado do reajuste</h2>
    <p>O produto que custava <?= numfmt_format_currency($pattern, $price, "BRL"); ?>, com <strong><?= $percentage; ?>% de aumento</strong> vai passar a custar <strong><?= numfmt_format_currency($pattern, $readjustedPrice, "BRL"); ?></strong> a partir de agora.</p>
  </div>
  <script>
    function changePercentage(event) {
      document.querySelector("label.percentage strong").innerHTML = event.currentTarget.value + "%"
    }
  </script>
</body>
</html>