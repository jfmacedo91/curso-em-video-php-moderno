<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Quantidade de salários</title>
</head>
<body>
  <?php
    $basicSalary = 1380;
    $salary = $_GET["salary"] ?? $basicSalary;
    $salaryAmount = intdiv($salary, $basicSalary);
    $rest = $salary - $basicSalary * $salaryAmount;

    $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET">
      <label for="salary">Salário (R$)</label>
      <input type="number" step="0.01" name="salary" id="salary" value="<?= $salary; ?>">
      <p>Considerando o salário mínimo de <strong><?= numfmt_format_currency($pattern, $basicSalary, "BRL"); ?></strong></p>
      <input type="submit" value="Calcular" class="btn">
    </form>
  </main>
  <div class="result">
    <h2>Resultado final</h2>
    <p>Quem recebe um salário de <?= numfmt_format_currency($pattern, $salary, "BRL"); ?> ganha <strong><?= $salaryAmount; ?> salários mínimos</strong> + <?= numfmt_format_currency($pattern, $rest, "BRL"); ?></p>
  </div>
</body>
</html>