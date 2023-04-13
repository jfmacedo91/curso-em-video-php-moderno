<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Calculadora de tempo</title>
</head>
<body>
  <?php
    $time = $_GET["time"] ?? 0;
    $weeks = intdiv($time, (60 * 60 * 24 * 7));
    $days = intdiv($time % (60 * 60 * 24 * 7), (60 * 60 * 24));
    $hours = intdiv($time % (60 * 60 * 24), (60 * 60));
    $minutes = intdiv($time % (60 * 60), 60);
    $seconds = $time % 60;
  ?>
  <main>
    <h1>Calculadora de tempo</h1>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="GET">
      <label for="time">Qual é o total de segundos?</label>
      <input type="number" name="time" id="time" value="<?= $time; ?>">
      <input type="submit" value="Calcular" class="btn">
    </form>
  </main>
  <div class="result">
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <strong><?= number_format($time, 0, ",", "."); ?> segundos</strong> equivalem a um total de:</p>
    <ul>
      <li><?= $weeks; ?> semanas</li>
      <li><?= $days; ?> dias</li>
      <li><?= $hours; ?> horas</li>
      <li><?= $minutes; ?> minutos</li>
      <li><?= $seconds; ?> segundos</li>
    </ul>
  </div>
</body>
</html>