<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Médias aritméticas</title>
</head>
<body>
  <?php
    $value1 = $_GET["value1"] ?? 0;
    $weight1 = $_GET["weight1"] ?? 1;
    $value2 = $_GET["value2"] ?? 0;
    $weight2 = $_GET["weight2"] ?? 1;
    $average = ($value1 + $value2) / 2;
    $weightedAverage = ($value1 * $weight1 + $value2 * $weight2) / ($weight1 + $weight2);
  ?>
  <main>
    <h1>Médias aritméticas</h1>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="GET">
      <label for="value1">1° Valor</label>
      <input type="number" step="0.01" name="value1" id="value1" value="<?= $value1; ?>">
      <label for="weight1">1° Peso</label>
      <input type="number" name="weight1" id="weight1" value="<?= $weight1; ?>">
      <label for="value2">2° Valor</label>
      <input type="number" step="0.01" name="value2" id="value2" value="<?= $value2; ?>">
      <label for="weight2">2° Peso</label>
      <input type="number" name="weight2" id="weight2" value="<?= $weight2; ?>">
      <input type="submit" value="Calcular médias" class="btn">
    </form>
  </main>
  <div class="result">
    <h2>Cálculo das médias</h2>
    <p>Analisando os valores <?= $value1; ?> e <?= $value2; ?>:</p>
    <ul>
      <li>A <strong>média aritmética simples</strong> entre os valores é igual a <?= number_format($average, 2, ",", "."); ?></li>
      <li>A <strong>média aritmética ponderada</strong> com os pesos <?= $weight1; ?> e <?= $weight2; ?> é igual a <?= number_format($weightedAverage, 2, ",", "."); ?></li>
    </ul>
  </div>
</body>
</html>