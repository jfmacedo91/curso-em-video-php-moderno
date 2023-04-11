<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Formulário retroalimentado</title>
</head>
<body>
  <main>
    <?php
      $value1 = $_GET['value1'] ?? 0;
      $value2 = $_GET['value2'] ?? 0;
    ?>
    <h1>Somador de valores</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="GET">
      <label for="value1">Valor 1</label>
      <input type="number" name="value1" id="value1" value="<?= $value1; ?>">
      <label for="value2">Valor 2</label>
      <input type="number" name="value2" id="value2" value="<?= $value2; ?>">
      <input type="submit" value="Somar" class="btn">
    </form>
  </main>
  <?php if($value1 && $value2): ?>
    <section class="result">
      <h2>Resultado da soma</h2>
      <?php
        $sum = $value1 + $value2;
        echo "<p>A soma entre os valores $value1 e $value2 é igual a <strong>$sum</strong></p>"
      ?>
    </section>
  <?php endif; ?>
</body>
</html>