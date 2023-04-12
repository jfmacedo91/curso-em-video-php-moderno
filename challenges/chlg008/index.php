<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Calculo de raízes</title>
</head>
<body>
  <?php
    $num = $_GET["num"] ?? 1;
    $squareRoot = sqrt($num);
    $cubeRoot = pow($num, 1/3);
  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="GET">
      <label for="num">Número</label>
      <input type="number" name="num" id="num" value="<?= $num; ?>">
      <input type="submit" value="Calcular raízes" class="btn">
    </form>
  </main>
  <div class="result">
    <h2>Resultado final</h2>
    <p>Analisando o <strong>número <?= $num; ?></strong>, temos:</p>
    <ul>
      <li>A sua raiz quadrada é <strong><?= number_format($squareRoot, 3, ',', '.'); ?></strong></li>
      <li>A sua raiz cúbica é <strong><?= number_format($cubeRoot, 3, ',', '.'); ?></strong></li>
    </ul>
  </div>
</body>
</html>