<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Calculo de idade</title>
</head>
<body>
  <?php
    $birthYear = $_GET["birthYear"] ?? 2000;
    $currentYear = date("Y");
    $year = $_GET["year"] ?? $currentYear;
    $age = $year - $birthYear;
  ?>
  <main>
    <h1>Calculando sua idade</h1>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="GET">
      <label for="birthYear">Em que ano você nasceu?</label>
      <input type="number" name="birthYear" id="birthYear" value="<?= $birthYear; ?>">
      <label for="year">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?= $currentYear; ?></strong>)</label>
      <input type="number" name="year" id="year" value="<?= $year; ?>">
      <input type="submit" value="Qual será minha idade?" class="btn">
    </form>
  </main>
  <div class="result">
    <h2>Resultado</h2>
    <p>Quem nasceu em <?= $birthYear; ?> vai ter <strong><?= $age; ?> anos</strong> em <?= $year; ?>!</p>
  </div>
</body>
</html>